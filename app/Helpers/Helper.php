<?php

namespace App\Helpers;


use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Schema;
use Intervention\Image\Facades\Image;
use phpDocumentor\Reflection\Types\Null_;
use App\Models\User;
use Illuminate\Support\Carbon;

class Helper
{
    public static function findData($table,$field,$value,$result){
        return DB::table($table)->where($field,'=',$value)->first()->$result;
    }
    public static function allData($p, $join=null, $where=null){
        $ex = [];
        $column = [];
        array_push($ex, [$p . '_created_at', $p . '_updated_at', $p . '_deleted_at', $p . '_by']);
        $data = new \stdClass();
        try {
            $query = DB::table($p)->select($p . '.*');
            if ($where)
            {
                foreach ($where as $key => $value) {
                    $query->where($key,$value);
                }
            }
            if ($join) {
                foreach ($join as $value) {
                    $query->join($value, $value . '_id', '=', $p . '_' . $value . '_id');
                    (Schema::hasColumn($value, $value . '_nama')) ? $query->addSelect($value . '_nama') : null;
                    array_push($ex, [$p . '_' . $value . '_id', $value . '_by', $value . '_id']);
                }
            }
            $data->data = $query->get();
            foreach ($data->data[0] as $k => $val) {
                array_push($column, $k);
            }
            foreach ($ex as $v) {
                $column = array_merge(array_diff($column, $v));
            }
            $data->column = $column;
            $data->table = $p;
            $data->join = $join;
        } catch (\Exception $e) {
            return response()->json($e, 500);
        }
        return response()->json($data, 200);
    }

    public static function rp($p)
    {
        return 'Rp. ' . number_format($p,2,'.',',');
    }

    public static function rm($p)
    {
        return 'RM ' . number_format($p,2,'.',',');
    }

    public static function floatSS($p)
    {
        return number_format((float)$p,2,'.','');
    }

    public static function by($p){
        $data = User::where('name',$p)->select('id')->first();
        return $data->id;
    }


    public static function base64($p)
    {
        return Image::make($p)->encode('data-url');
    }

    public static function foreign($table, $fieldId, $index)
    {
        $data = DB::table($table)->get();
        return $data[$index - 1]->$fieldId;
    }

    public static function foreignData($table,$join=null){
        $result = DB::table($table);
        $join ? $result->join($join,$join.'_id','=',$table.'_'.$join.'_id'):null;
        return $result->inRandomOrder()->first();
    }

    public function foreignUuidRandomTable($table)
    {
        $ids = $table . '_id';
        return DB::table($table)->inRandomOrder()->first()->$ids;
    }

    public static function prefix($p)
    {
		$data = explode('_',$p);

		$hasil = "";
		foreach ($data as $val => $key){
		   $hasil = $hasil.$key[0]."_";
		}
		return $hasil;
    }


}

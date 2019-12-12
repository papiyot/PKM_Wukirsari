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

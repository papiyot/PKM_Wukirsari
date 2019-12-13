<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Schema;

class MainController extends Controller
{
    public function get(Request $request, $p)
    {
        $ex = [];
        $column = [];
        array_push($ex, [$p . '_created_at', $p . '_updated_at', $p . '_deleted_at', $p . '_by']);
        $data = new \stdClass();
        try {
            $query = DB::table($p)->select($p . '.*');
            if ($request->where)
            {
                foreach ($request->where as $key => $value) {
                    $query->where($key,$value);
                }
            }
            if ($request->join) {
                foreach ($request->join as $value) {
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
            $data->buildForm = $this->formBuilder($p);
            $data->table = $p;
            $data->join = $request->join;
        } catch (\Exception $e) {
            return response()->json($e, 500);
        }
        return response()->json($data, 200);

    }
}

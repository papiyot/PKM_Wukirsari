<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Schema;
use App\Helpers\Helper;
class MainController extends Controller
{
    public function get(Request $request, $p)
    {
        return  Helper::allData($p,$request->join,$request->where);
    }

    public function index()
    {

//        return url('get/objek?join%5B0%5D=desa');
//       return route('get',['objek', 'join'=>['desa']]);
//        return self::get([],'objek');
        return  $set = Helper::allData('objek',['desa']);
//        return $set;
//        return 'ea';
//        return view('master::index');
    }
}

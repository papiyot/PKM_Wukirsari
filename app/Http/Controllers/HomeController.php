<?php

namespace App\Http\Controllers;

use App\Helpers\Helper;
use Illuminate\Http\Request;

class HomeController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
//    public function __construct()
//    {
//        $this->middleware('auth');
//    }

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Contracts\Support\Renderable
     */
    public function index()
    {
        $data = new \stdClass();
        $data->objek = Helper::allData('objek',['desa']);
        $data->paket = Helper::allData('paket');
        $data->paket_detail = Helper::allData('paket_detail',['paket', 'objek']);
//        return $data;
        return view('app.beranda.beranda', compact('data'));
    }
}

<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use DB;
use App\Models\Mobil;

class MobilController extends Controller
{
    
    public function __construct()
    {
        $this->middleware('auth');
    }

    protected function list_mobil()
    {
        $var['mobils'] = DB::table('mobil')
                            ->select('*')
                            ->get();
        return view('admin/list-mobil' , $var);
    }

    protected function add_mobil()
    {
        return view('admin/add-mobil');
    }

    protected function save_mobil(Request $res){

        DB::table('mobil')->insert([
            'merek' => $res->input("merek"),
            'model' => $res->input("model"),
            'plat_no' => $res->input("plat_no"),
            'tarif' => str_replace("," ,"",$res->input("tarif")),
            'status' => 2,
        ]);

        $var['mobils'] = DB::table('mobil')
        ->select('*')
        ->get();
        
        return view('admin/list-mobil' , $var);        

    }
}

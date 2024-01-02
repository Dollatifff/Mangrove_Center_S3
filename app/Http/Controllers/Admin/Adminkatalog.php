<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Katalog;

class Adminkatalog extends Controller
{
    function index(){
        $data['list'] = Katalog::get();
        return view('admin.katalog.index', $data);
    }

    function tambah(){
        return view('admin.katalog.tambah');
    }

    function aksiTambah(Request $request){
        // $request->validate(Katalog::$rules, Katalog::$pesan);
        dd($request->all());
    }
}

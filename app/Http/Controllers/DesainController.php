<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class DesainController extends Controller
{
    //
    public function create(){
        return view('kontak');
    }

    public function creates(){
        return view('Tambah');
    }

    public function created(){
        return view('kontakedit');
    }

    public function createf(){
        return view('homeedit');
    }
}

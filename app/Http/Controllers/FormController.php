<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class FormController extends Controller
{
    public function index(){
        return view('week9');
    }

    public function hasil(Request $request){
        $data = [
            'nama' => $request->input('nama'),
            'email' => $request->input('email'),
            'lokasi' => $request->input('lokasi'),
            'jk' => $request->input('jk'),
            'skill' => $request->input('skill'),
        ];
        return view('week9', compact('data'));

    }
}

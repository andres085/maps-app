<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class AddressController extends Controller
{
    //
    public function index(){
        return view('addresses.index');
    }

    public function create(){
        return view('addresses.create');
    }

    public function edit(){
        return view('addresses.edit');
    }
}

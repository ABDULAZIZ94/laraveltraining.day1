<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class MethodSpoofingController extends Controller
{
    public function index(){
        return view('forms.index');
    }
    public function show(){
        return view('forms.show');
    }
    public function store(){
        return view('forms.store');
    }
    public function update(){
        return view('forms.update');
    }
    public function modify(){
        return view('forms.modify');
    }
    public function destroy(){
        return view('forms.destroy');
    }
}

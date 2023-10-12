<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class ParaController extends Controller{
    public function index($id){
        $sum = $id * 2;
        print_r( $sum);
    }

    public function dupla( $id, $name){
        print_r($id . " ");
        print_r($name);
    }
    public function opcio($id, $name =null){
        print_r($id . " ");
        print_r($name);
    }
    public function check($id, $name){
        print_r($id . " ");
        print_r($name);
    }
}
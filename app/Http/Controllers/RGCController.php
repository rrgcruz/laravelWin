<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class RGCController extends Controller
{
    public function index($name){
        echo "<h1>".$name."</h1";
        echo "<h1>"."  ,Hello from RGCController"."</h1>";
    }
}

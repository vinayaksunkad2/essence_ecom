<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class TestController extends Controller
{
    public function getfirstlastname(){
        return splitName("vinayak sunkad");
    }
}

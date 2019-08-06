<?php

namespace App\Http\Controllers\Front;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class IndexController extends Controller
{
    //
    public function index(){

   $title ="INOCrypt Infosoft software company";
   $data=[
       'this is first line',
       'this is  second',
       'this is  third',



   ];
        return view('front.index',[
            'title'=>$title,
            'data'=>$data



            ]);
    }



}

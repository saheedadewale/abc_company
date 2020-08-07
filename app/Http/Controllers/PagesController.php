<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class PagesController extends Controller
{
    //about method
    public function index(){
        $title = "ABC Company";
       // return view('pages.index', compact('title'));
        return view('pages.index')->with('title',$title);
    }
    public function contact(){
        return view('pages.contact');
    }
    public function blog(){
        return view('pages.blog');
    }
    // public function sport(){
    //     $data = array(
    //         'title' => 'Overall Sport Gist',
    //         'areas' => ['Football','Boxing','Tennis','Car Race','Ruggy','Others']
    //     );
    //     return view('pages.sport')->with($data);
    // }
   
}

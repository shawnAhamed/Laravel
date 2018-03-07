<?php

namespace App\Http\Controllers;

use App\Blog;
use Illuminate\Http\Request;

class SiteView extends Controller
{


    public  function index(){
        $blogs=Blog::where('publication_status',1)->get();
        return view('front.home.homecontent',['blogs'=>$blogs]);
    }


    public  function blog(){
        return view('front.blog.blog');
    }
}

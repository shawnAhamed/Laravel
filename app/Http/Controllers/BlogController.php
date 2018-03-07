<?php

namespace App\Http\Controllers;

use App\Category;
use App\Blog;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Symfony\Component\Debug\BufferingLogger;


class BlogController extends Controller
{
    public function index(){

        $publishedCategories=Category::where('publication_status',1)->get();


        return view('admin.blog.add-blog',['publishedCategories'=>$publishedCategories]);

    }
    public function saveBlogInfo(Request $request){

        $blogImage=$request->file('blog_image');
        $imageName=$blogImage->getClientOriginalName();


        $directory='blog-image/';
        $blogImage->move($directory,$imageName);
        $imgurl=$directory.$imageName;


        $blog=new Blog();


        $blog->blog_title=$request->blog_title;
        $blog->blog_auther=Auth::user()->name;
        $blog->blog_category=$request->blog_category;
        $blog->blog_description=$request->blog_description;
        $blog->blog_image=$imgurl;
        $blog->publication_status=$request->publication_status;

        //return $request->all();
       $blog->save();


        return redirect('/blog/add-blog')->with('message','Blog succesfully added');

    }

    public function manageBlog(){

        $blogs=Blog::orderBy ('id','desc')->get();
        return view('admin.blog.manage-blog',['blogs'=>$blogs]);
    }




    public function unpublishedblog($id){

        $blogByID=Blog::find($id);
        $blogByID->publication_status=0;
        $blogByID->save();
        return redirect('/blog/manage-blog')->with('message','Unpublished');




    }
    public function publishedblog($id){



        $blogByID=Blog::find($id);
        $blogByID->publication_status=1;
        $blogByID->save();
        return redirect('/blog/manage-blog')->with('message','published');




    }


    public function editblog($id){
        $blog=Blog::find($id);



        return view('/admin/blog/edit-blog',['blog'=>$blog]);

    }



    public function updateblog(Request $request){
        $blogByID=Blog::find($request->blog_id);
        $blogByID->blog_title=$request->blog_title;
        $blogByID->blog_description=$request->blog_description;
        $blogByID->publication_status=$request->publication_status;
        $blogByID->save();
        return redirect('/blog/manage-blog');



    }

    public function deleteblog($id){
        $blog=Blog::find($id);
        $blog->delete();
        return redirect('/blog/manage-blog');


    }


 public function readblog(){
     $blogs=Blog::where('publication_status',1)->get();
     return view('front.blog.blog',['blogs'=>$blogs]);

 }

}

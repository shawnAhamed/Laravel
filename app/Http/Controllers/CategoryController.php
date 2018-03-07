<?php

namespace App\Http\Controllers;
use DB;
use App\Category;
use Illuminate\Http\Request;

class CategoryController extends Controller
{
    public function index(){

        return view('admin.category.add-category');
    }

    public function saveCategoryInfo(Request $request){
        // return $request->all();

        //OOP

//        $category=new Category();
//        $category->category_name=$request->category_name;
//        $category->category_description=$request->category_description;
//        $category->publication_status=$request->publication_status;
//        $category->save();


        // Query Builder

//        DB::table('categories')->insert([
//            'category_name' => $request->category_name,
//            'category_description' => $request->category_description,
//            'publication_status' =>$request->publication_status,
//
//
//
//        ]);



        //Eloquent ORM

        Category::create($request->all());

        //for that it need to set in model class category.php




        return redirect('/category/add-category')->with('message','Category succesfully added');



    }



    public function manageCategory(){
        //$categories=Category::all();

        $categories=Category::orderBy ('id','desc')->get();


        return view('admin.category.managecategory',['categories'=>$categories]);
    }


    public function unpublishedcategory($id){

        $categoryByID=Category::find($id);
        $categoryByID->publication_status=0;
        $categoryByID->save();
        return redirect('/category/manage-category')->with('message','Unpublished');




    }
    public function publishedcategory($id){



        $categoryByID=Category::find($id);
        $categoryByID->publication_status=1;
        $categoryByID->save();
        return redirect('/category/manage-category')->with('message','published');




    }


    public function editcategory($id){
        $category=Category::find($id);



       return view('/admin/category/editcategory',['category'=>$category]);

    }



    public function updateCategory(Request $request){
       $categoryByID=Category::find($request->category_id);
        $categoryByID->category_name=$request->category_name;
        $categoryByID->category_description=$request->category_description;
        $categoryByID->publication_status=$request->publication_status;

        $categoryByID->save();
        return redirect('/category/manage-category');



    }

    public function deletcategory($id){
        $category=Category::find($id);
        $category->delete();
        return redirect('/category/manage-category')->with('message','Deleted');


    }

}

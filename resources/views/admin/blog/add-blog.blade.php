@extends('admin.master')
@section('add-blog')
    <div class="content-wrapper">
        <div class="container-fluid">

            @if($message=Session::get('message'))
                <h2 class="text-success text-center">{{$message}}</h2>
            @endif


            <form class="form-horizontal" action="{{url('/blog/new-blog')}}" method="POST" enctype="multipart/form-data">
                {{csrf_field()}}
                <div class="form-group">
                    <label col-md-3>Blog Title</label>
                    <div class="col-md-9">
                        <input type="text" name="blog_title" class="form-control">
                    </div>

                </div>
                <div class="form-group">

                    <label class="col-md-3">Blog Category</label>
                    <div class="col-md-9">
                        <select class="form-control" name="blog_category">


                            <option>--select Category--</option>
                            @foreach($publishedCategories as $publishedCategory)
                            <option>{{$publishedCategory->category_name}}</option>
                                @endforeach

                        </select>
                    </div>

                </div>
                <div class="form-group">
                    <label col-md-3>Blog Content</label>
                    <div class="col-md-9">
                        <textarea type="text" name="blog_description" class="form-control"></textarea>
                    </div>

                </div>
                <div>
                    <label col-md-3>Blog Image</label>
                    <div class="col-md-9">
                        <input type="file" name="blog_image" class="form-control" accept="image/*">
                    </div>
                </div>
                <div class="form-group">

                    <label class="col-md-3">Publication Status</label>
                    <div class="col-md-9">
                        <select class="form-control" name="publication_status">
                            <option value="1">Published</option>
                            <option value="0">UnPublished</option>

                        </select>
                    </div>

                </div>

                <div class="form-group">
                    <div class="col-sm-9 col-md-offset-3">
                        <input type="submit" name="btn" class="btn btn-success btn-block" value="save blog info">
                    </div>

                </div>

            </form>




        </div>
    </div>

@endsection
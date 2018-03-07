@extends('admin.master')
@section('edit-blog')
    <div class="content-wrapper">
        <div class="container-fluid">

            @if($message=Session::get('message'))
                <h2 class="text-success text-center">{{$message}}</h2>
            @endif


            <form class="form-horizontal" action="{{url('/blog/update-blog')}}" method="POST" name="editblog">
                {{csrf_field()}}
                <div class="form-group">
                    <label col-md-3>Blog Name</label>
                    <div class="col-md-9">
                        <input type="text" name="blog_name" class="form-control" value="{{$blog->blog_title}}">
                        <input type="hidden" name="category_id" class="form-control" value="{{$blog->id}}">
                    </div>

                </div>
                <div class="form-group">
                    <label col-md-3>Blog Description</label>
                    <div class="col-md-9">
                        <textarea type="text" name="category_description" class="form-control">{{$blog->blog_description}}</textarea>
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
                        <input type="submit" name="btn" class="btn btn-success btn-block" value="update blog info">
                    </div>

                </div>

            </form>




        </div>
    </div>
    <script>
        document.forms['editblog'].elements['publication_status'].value='{{$blog->publication_status}}';

    </script>

@endsection
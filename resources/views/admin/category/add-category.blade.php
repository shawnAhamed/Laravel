@extends('admin.master')
@section('add-category')
    <div class="content-wrapper">
        <div class="container-fluid">

            @if($message=Session::get('message'))
                <h2 class="text-success text-center">{{$message}}</h2>
                @endif


            <form class="form-horizontal" action="{{url('/category/new-category')}}" method="POST">
                {{csrf_field()}}
                <div class="form-group">
                    <label col-md-3>Cactegory Name</label>
                    <div class="col-md-9">
                    <input type="text" name="category_name" class="form-control">
                    </div>

                </div>
                <div class="form-group">
                    <label col-md-3>Category Description</label>
                    <div class="col-md-9">
                        <textarea type="text" name="category_description" class="form-control"></textarea>
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
                        <input type="submit" name="btn" class="btn btn-success btn-block" value="save category info">
                    </div>

                </div>

            </form>




        </div>
    </div>

    @endsection
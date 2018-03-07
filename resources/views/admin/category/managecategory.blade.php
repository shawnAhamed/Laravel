@extends('admin.master')

<div class="content-wrapper">
    <div class="container-fluid">
        <hr>

        <div class="row">
            <div class="panel panel-default">
                <div class="panel-body">
                    @if($message=Session::get('message'))
                        <h2 class="text-success text-center">{{$message}}</h2>
                    @endif
                    <table class="table table-bordered">
                        <tr>
                            <th>Category No.</th>
                            {{--<th>Category ID</th>--}}
                            <th>Category Name</th>
                            <th>Category Description</th>
                            <th>Publication Status</th>
                            <th>Action</th>
                        </tr>
                        <?php $i=1; ?>
                        @foreach($categories as $category)
                        <tr>
                            <td>{{$i++}}</td>
                            {{--<td>{{$category->id}}</td>--}}
                            <td>{{$category->category_name}}</td>
                            <td>{{$category->category_description}}</td>
                            <td>{{$category->publication_status==1?'Published':'UnPublished'}}</td>
                            <td>
                                @if($category->publication_status==1)
                                <a href="{{url('/category/unpublished-category/'.$category->id)}}" class="btn btn-info" title="published">
                                    <span class="fa fa-fw fa-arrow-up"></span>
                                </a>
                                @else
                                    <a href="{{url('/category/published-category/'.$category->id)}}" class="btn btn-warning" title="Unpublished">
                                        <span class="fa fa-fw fa-arrow-down"></span>
                                    </a>
                                @endif
                                <a href="{{url('/category/edit-category/'.$category->id)}}" class="btn btn-primary" title="Edit">
                                    <span class="fa fa-fw fa-edit"></span>
                                </a>
                                <a href="{{url('/category/deletecategory/'.$category->id)}}" onclick="return confirm('are you sure to delete')" class="btn btn-danger" title="Delet">
                                    <span class="fa fa-fw fa-trash"></span>
                                </a>
                            </td>
                        </tr>
                            @endforeach
                    </table>
                </div>
            </div>
        </div>





    </div>
</div>
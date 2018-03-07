@extends('admin.master')
@section('manage-blog')

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
                            <th>BLog No.</th>
                            {{--<th>Category ID</th>--}}
                            <th>Blog Name</th>
                            <th>Blog Description</th>
                            <th>Publication Status</th>
                            <th>Action</th>
                        </tr>
                        <?php $i=1; ?>
                        @foreach($blogs as $blogs)
                            <tr>
                                <td>{{$i++}}</td>
                                {{--<td>{{$category->id}}</td>--}}
                                <td>{{$blogs->blog_title}}</td>
                                <td>{{$blogs->blog_description}}</td>
                                <td>{{$blogs->publication_status==1?'Published':'UnPublished'}}</td>
                                <td>
                                    @if($blogs->publication_status==1)
                                        <a href="{{url('/blog/unpublished-blog/'.$blogs->id)}}" class="btn btn-info" title="published">
                                            <span class="fa fa-fw fa-arrow-up"></span>
                                        </a>
                                    @else
                                        <a href="{{url('/blog/published-blog/'.$blogs->id)}}" class="btn btn-warning" title="Unpublished">
                                            <span class="fa fa-fw fa-arrow-down"></span>
                                        </a>
                                    @endif
                                    <a href="{{url('/blog/edit-blog/'.$blogs->id)}}" class="btn btn-primary" title="Edit">
                                        <span class="fa fa-fw fa-edit"></span>
                                    </a>
                                    <a href="{{url('/blog/deleteblog/'.$blogs->id)}}" onclick="return confirm('are you sure to delete')" class="btn btn-danger" title="Delet">
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
    @endsection
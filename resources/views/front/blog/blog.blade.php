@foreach($blogs as $blog)
    <div class="col-md-12">
        <div class="blog">
            <div class="blog-img">
                <img src="{{asset($blog->blog_image)}}" alt="" style="height:400px;width:500px;">
            </div>
            <ul class="blog-meta" style="list-style:none;">
                <li style="list-style:none;">Publishd Date:{{$blog->created_at}},</li>
                <li style="list-style:none;">Author :{{$blog->blog_auther}}</li>
            </ul>
            <h3>{{$blog->blog_title}}</h3>
            <p>{{$blog->blog_description}}</p>

        </div>
    </div>
@endforeach

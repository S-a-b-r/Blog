@extends('layouts.main')

@section('main_image')
    {{asset('assets/img/home-bg.jpg')}}
@endsection

@section('title')
    Clean Blog
@endsection

@section('description')
    A Blog Theme by Start Bootstrap
@endsection

@section('content')
<div class="container px-4 px-lg-5">
    <div class="row gx-4 gx-lg-5 justify-content-center">
        <div class="col-md-10 col-lg-8 col-xl-7">
            <!-- Post preview-->
            @foreach($posts as $post)
                <div class="post-preview">
                    <a href="{{route('blog.show', $post->id)}}">
                        <h2 class="post-title">{{$post->title}}</h2>
                        <h3 class="post-subtitle">{!! $post->content !!} </h3>
                        <img src="{{"storage/" . $post->preview_image}}" class="w-100">
                    </a>
                    <p class="post-meta">
                        Posted on {{$post->created_at}}
                    </p>
                </div>
                <!-- Divider-->
                <hr class="my-4" />
            @endforeach
            <!-- Pager-->
            <div class="d-flex justify-content-end mb-4"><a class="btn btn-primary text-uppercase" href="#!">Older Posts →</a></div>
        </div>
    </div>
</div>
@endsection

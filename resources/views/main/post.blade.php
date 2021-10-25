@extends('layouts.main')

@section('main_image')
    {{asset("storage/".$post->main_image)}}
@endsection

@section('title')
    {{$post->title}}
@endsection

@section('description')
    {!! $post->description !!}
@endsection

@section('content')
    <article class="mb-4">
        <div class="container px-4 px-lg-5">
            <div class="row gx-4 gx-lg-5 justify-content-center">
                <div class="col-md-10 col-lg-8 col-xl-7">
                    <p>
                    {!! $post->content !!}
                    </p>
                    <p class="post-meta">
                        Author: {{$post->getCreator->name}}
                    </p>
                    <p class="post-meta">
                        Published on: {{$date->format('j-n-Y')}}
                    </p>
                </div>
            </div>
        </div>
    </article>
@endsection

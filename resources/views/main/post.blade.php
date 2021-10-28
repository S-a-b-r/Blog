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
                    <div>
                        <p class="post-meta">
                            Author: {{$post->getCreator->name}}
                        </p>

                        <div class="d-flex justify-content-between col-11">
                            <p class="post-meta">
                                Published on: {{$date->format('j-n-Y')}}
                            </p>
                            @auth()
                                <form action="{{route('blog.like.store', $post)}}" method="post">
                                    @csrf
                                    <button type="submit" class="bg-transparent border-0">
                                        @if(auth()->user()->likedPosts->contains($post->id))
                                            <i class="fas fa-heart"></i>
                                        @else
                                            <i class="far fa-heart"></i>
                                        @endif
                                    </button>
                                </form>
                            @endauth
                        </div>
                    </div>

                    <h5>Comments</h5>
                    @foreach($post->comments as $comment)
                    <div class="card" style="font-size: 16px">
                        <!-- User image -->
                        <div class="comment-text">
                            <span class="username">
                                <div class="card-header">
                                    {{$comment->user->name}}
                                    <span class="text-muted float-right">
                                        {{$comment->DateAsCarbon->format('j-n-Y  G:i:s')}}
                                    </span>
                                </div>
                            </span><!-- /.username -->
                            <div class="card-body">
                                {{$comment->content}}
                            </div>
                        </div>
                        <!-- /.comment-text -->
                    </div>
                    <br/>
                    @endforeach

                    @auth
                        <form method="post" action="{{route('blog.comment.store', $post->id)}}">
                            @csrf
                            @if(session('success'))
                                <div class="alert alert-success">
                                    {{session('success')}}
                                </div>
                            @endif

                            <h5 class="mt-4">You can leave a comment</h5>
                            <div class="form-floating">
                                <textarea class="form-control mb-3" id="message" name="content" placeholder="Enter your message here..."
                                          style="height: 7rem"></textarea>
                                <label for="message">Message</label>
                                @error('content')
                                <div class="text-danger">
                                    {{$message}}
                                </div>
                                @enderror
                            </div>

                            <button class="btn btn-primary text-uppercase" type="submit">
                                Send
                            </button>
                        </form>
                    @endauth
                </div>
            </div>
        </div>
    </article>
@endsection

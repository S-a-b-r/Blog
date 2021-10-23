@extends('layouts.main')


@section('main_image')
    {{asset('assets/img/contact-bg.jpg')}}
@endsection

@section('title')
    Contact Me
@endsection

@section('description')
    Have questions? I have answers.
@endsection

@section('content')
<main class="mb-4">
    <div class="container px-4 px-lg-5">
        <div class="row gx-4 gx-lg-5 justify-content-center">
            <div class="col-md-10 col-lg-8 col-xl-7">
                <p>Want to get in touch? Fill out the form below to send me a message and I will get back to you as
                    soon as possible!</p>
                <div class="my-5">
                    <form id="contactForm" action="#" method="post">
                        @csrf

                        <div class="form-floating">
                            <input class="form-control" id="name" type="text" placeholder="Enter your name..."
                                   value="{{$user->name}}"/>
                            <label for="name">Name</label>
                            @error('name')
                                <div class="text-danger">
                                    {{$message}}
                                </div>
                            @enderror
                        </div>
                        <div class="form-floating">
                            <input class="form-control" id="email" type="email" placeholder="Enter your email..."
                                   value="{{$user->email}}"/>
                            <label for="email">Email address</label>
                            @error('email')
                            <div class="text-danger">
                                {{$message}}
                            </div>
                            @enderror
                        </div>
                        <div class="form-floating">
                            <textarea class="form-control" id="message" placeholder="Enter your message here..."
                                      style="height: 12rem" data-sb-validations="required"></textarea>
                            <label for="message">Message</label>
                            <div class="invalid-feedback" data-sb-feedback="message:required">A message is
                                required.
                            </div>
                        </div>
                        <br/>

                        <button class="btn btn-primary text-uppercase" id="submitButton" type="submit">
                            Send
                        </button>
                    </form>
                </div>
            </div>
        </div>
    </div>
</main>
@endsection

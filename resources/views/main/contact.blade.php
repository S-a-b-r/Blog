@extends('layouts.main')


@section('main_image')
    {{asset('assets/img/contact-bg.jpg')}}
@endsection

@section('title')
    Contact Me
@endsection

@section('description')
    Есть вопросы? У меня есть ответы
@endsection

@section('content')
<main class="mb-4">
    <div class="container px-4 px-lg-5">
        <div class="row gx-4 gx-lg-5 justify-content-center">
            <div class="col-md-10 col-lg-8 col-xl-7">
                <p>Хотите задать вопрос? Заполните форму ниже и отправьте, я обязательно вам отвечу. Только убедитесь, что ваша почта указана верно, договорились?</p>
                <div class="my-5">
                    <form id="contactForm" action="{{route('blog.contact.store')}}" method="post">
                        @csrf

                        <div class="form-floating">
                            @auth()
                                <input class="form-control" id="name" name="name" type="text" placeholder="Enter your name..."
                                       value="{{auth()->user()->name}}"/>
                            @endauth
                            @guest()
                                    <input class="form-control" id="name" name="name" type="text" placeholder="Enter your name..."/>
                            @endguest
                            <label for="name">Name</label>
                            @error('name')
                                <div class="text-danger">
                                    {{$message}}
                                </div>
                            @enderror
                        </div>
                        <div class="form-floating">
                            @auth()
                                <input class="form-control" id="email" name="email" type="email" placeholder="Enter your email..."
                                       value="{{auth()->user()->email}}"/>
                            @endauth
                            @guest()
                                <input class="form-control" id="email" name="email" type="email" placeholder="Enter your email..."/>
                            @endguest
                            <label for="email">Email address</label>
                            @error('email')
                            <div class="text-danger">
                                {{$message}}
                            </div>
                            @enderror
                        </div>
                        <div class="form-floating">
                            <textarea class="form-control" id="message" name="content" placeholder="Enter your message here..."
                                      style="height: 12rem" data-sb-validations="required"></textarea>
                            <label for="message">Message</label>
                            @error('content')
                            <div class="text-danger">
                                {{$message}}
                            </div>
                            @enderror
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

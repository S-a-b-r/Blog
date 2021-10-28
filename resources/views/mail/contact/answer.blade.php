@component('mail::message')
    Здравствуйте, {{$name}} отвечаем на ваш вопрос на сайте "https://sabr-test.online": "{{$content}}".<br/>
    {{$message}}
@endcomponent

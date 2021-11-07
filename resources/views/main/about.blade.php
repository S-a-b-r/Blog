@extends('layouts.main')

@section('main_image')
    {{asset('assets/img/about-bg.jpg')}}
@endsection

@section('title')
    About
@endsection

@section('description')
    Это про меня. Да-да, про меня
@endsection

@section('content')
    <main class="mb-4">
        <div class="container px-4 px-lg-5">
            <div class="row gx-4 gx-lg-5 justify-content-center">
                <div class="col-md-10 col-lg-8 col-xl-7">
                    <p>Я - студент 3го курса УдГУ, направления "прикладная информатика в юриспруденции", разработал этот блог на 5ый семестр обучения. Можно было бы и раньше, но что-то вечно стояло на пути. В этом блоге я буду рассказывать вам о всяких интересностях и событиях в моей жизни. Делиться всем, чем только можно. Рассказывать про свои текущие, прошлые и будущие проекты.</p>
                    <p>Рад вас всех видеть на страницах моего блога!</p>
                </div>
            </div>
        </div>
    </main>
@endsection

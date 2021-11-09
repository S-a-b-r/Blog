@extends('admin.layouts.main')

@section('title')
    Ответ на сообщение
@endsection

@section('content')
    <!-- Main content -->
    <section class="content">
        <div class="container-fluid">
            <!-- Small boxes (Stat box) -->
            <div class="row">
                <div class="col-7">
                    <table class="table table-hover text-nowrap">
                        <tbody>
                            <tr>
                                <td>Отправитель</td>
                                <td>{{$contact->name}}</td>
                            </tr>
                            <tr>
                                <td>Почта</td>
                                <td>{{$contact->email}}</td>
                            </tr>
                            <tr>
                                <td>Текст</td>
                                <td>{{$contact->content}}</td>
                            </tr>
                            <tr>
                                <td>Отправлено</td>
                                <td>{{$contact->created_at}}</td>
                            </tr>
                        </tbody>
                    </table>

                    <form class="col-7" action="{{route('admin.contact.send', $contact->id)}}" method="post">
                        @csrf

                        <div class="form-group row">
                            <div class="col-12">
                                <textarea class="form-control" name="answer" placeholder="Введите ответ"></textarea>
                                @error('answer')
                                    <div class="text-danger">
                                        Это поле необходимо заполнить
                                    </div>
                                @enderror
                            </div>
                        </div>
                        <input type="submit" class="btn btn-primary" value="Отправить">
                    </form>
                </div>
            </div>
            <!-- /.row -->
        </div><!-- /.container-fluid -->
    </section>
    <!-- /.content -->
@endsection

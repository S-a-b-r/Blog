
@extends('admin.layouts.main')

@section('title')
    Сообщения от пользователей
@endsection

@section('content')
    <!-- Main content -->
    <section class="content">
        <div class="container-fluid">
            <!-- Small boxes (Stat box) -->
            <div class="row">
                <div class="col-8">
                    <div class="card">
                        <!-- /.card-header -->
                        <div class="card-body table-responsive p-0">
                            <table class="table table-hover text-nowrap">
                                <thead>
                                <tr>
                                    <th>ID</th>
                                    <th>Отправитель</th>
                                    <th>Email</th>
                                    <th>Текст</th>
                                    <th>Создано</th>
                                    <th>Обновлено</th>
                                    <th colspan="2" class="text-center">Действие</th>
                                </tr>
                                </thead>
                                <tbody>
                                @foreach($contacts as $contact)
                                <tr>
                                    <td>{{$contact->id}}</td>
                                    <td>{{$contact->name}}</td>
                                    <td>{{$contact->email}}</td>
                                    <td>{{$contact->content}}</td>
                                    <td>{{$contact->created_at}}</td>
                                    <td>{{$contact->updated_at}}</td>
                                    <td><a href="{{route('admin.contact.answer',$contact->id)}}"><i class="fas fa-reply"></i></a></td>
                                    <td>
                                        <form action="{{route('admin.contact.answer',$contact->id)}}" method="post">
                                            @csrf
                                            @method('DELETE')
                                            <button type="submit" class="border-0 bg-transparent">
                                                <i class="fas fa-trash text-danger" ></i>
                                            </button>
                                        </form>
                                    </td>
                                </tr>
                                @endforeach
                                </tbody>
                            </table>
                        </div>
                        <!-- /.card-body -->
                    </div>
                </div>
                <!-- /.card -->
            <!-- /.row -->
            </div><!-- /.container-fluid -->
        </div>
    </section>
    <!-- /.content -->
@endsection


@extends('admin.layouts.main')

@section('title')
    Архив
@endsection

@section('content')
    <!-- Main content -->
    <section class="content">
        <div class="container-fluid">
            <!-- Small boxes (Stat box) -->
            <div class="row">
                <div class="col-12">
                    <div class="card">
                        <!-- /.card-header -->
                        <div class="card-body table-responsive p-0">
                            <table class="table table-hover text-nowrap">
                                <thead>
                                <tr>
                                    <th>ID</th>
                                    <th>Название</th>
                                    <th>Создано</th>
                                    <th>Обновлено</th>
                                    <th colspan="3" class="text-center">Действие</th>
                                </tr>
                                </thead>
                                <tbody>
                                @foreach($posts as $post)
                                <tr>
                                    <td>{{$post->id}}</td>
                                    <td>{{$post->title}}</td>
                                    <td>{{$post->created_at}}</td>
                                    <td>{{$post->updated_at}}</td>
                                    <td><a href="{{route('blog.show', $post->id)}}"><i class="far fa-eye"></i></a></td>
                                    <td>
                                        <form action="{{route('admin.post.rearchive', $post->id)}}" method="post">
                                            @csrf
                                            <button type="submit" class="border-0 bg-transparent">
                                                <i class="fas fa-box-open text-info"></i>
                                            </button>
                                        </form>
                                    </td>
                                    <td>
                                        <form action="{{route('admin.post.delete', $post->id)}}" method="post">
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
        <form action="{{route('admin.test')}}" method="post">
            @csrf
            <div class="row h-100">
                <div class="col-8 bg-danger ">
                    <div class="row justify-content-center">
                        <input name="1" id="1" type="checkbox">
                        <input id="2" type="checkbox">
                        <input id="3" type="checkbox">
                        <input id="4" type="checkbox">
                    </div>
                </div>
                <div class="col-4 bg-dark">2</div>
            </div>
            <button class="btn-danger" type="submit">Submit</button>
        </form>
    </section>
    <!-- /.content -->
@endsection

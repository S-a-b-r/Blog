
@extends('admin.layouts.main')

@section('title')
    Посты
@endsection

@section('content')
    <!-- Main content -->
    <section class="content">
        <div class="container-fluid">
            <!-- Small boxes (Stat box) -->
            <div class="row">
                <div class="col-2">
                    <a href="{{route('admin.post.create')}}" class="btn btn-block btn-info mb-3">Добавить пост</a>
                </div>
            </div>
            <div class="row">
                <div class="col-12">
                    <div class="card">
                        <!-- /.card-header -->
                        <div class="card-body table-responsive p-0">
                            <table class="table table-hover text-nowrap">
                                <thead>
                                <tr>
                                    <th>ID</th>
                                    <th>Статус</th>
                                    <th>Название</th>
                                    <th>Создано</th>
                                    <th>Обновлено</th>
                                    <th colspan="5" class="text-center">Действие</th>
                                </tr>
                                </thead>
                                <tbody>
                                @foreach($posts as $post)
                                <tr>
                                    <td>{{$post->id}}</td>
                                    <td>{{$post->getStatus($post->status)}}</td>
                                    <td>{{$post->title}}</td>
                                    <td>{{$post->created_at}}</td>
                                    <td>{{$post->updated_at}}</td>
                                    @if($post->status == 0)
                                        <td>
                                            <form action="{{route('admin.post.publish', $post->id)}}" method="post">
                                                @csrf
                                                <button type="submit" class="border-0 bg-transparent" title="Опубликовать">
                                                    <i class="fas fa-upload"></i>
                                                </button>
                                            </form>
                                        </td>
                                    @endif
                                    @if($post->status == 1)

                                        <td>
                                            <form action="{{route('admin.post.unpublish', $post->id)}}" method="post">
                                                @csrf
                                                <button type="submit" class="border-0 bg-transparent" title="Снять с публикации">
                                                    <i class="fas fa-download"></i>
                                                </button>
                                            </form>
                                        </td>
                                    @endif
                                    <td><a href="{{route('blog.show',$post->id)}}"><i class="far fa-eye"></i></a></td>
                                    <td><a href="{{route('admin.post.edit',$post->id)}}"><i class="fas fa-pen text-success"></i></a></td>
                                    <td>
                                        <form action="{{route('admin.post.archive', $post->id)}}" method="post">
                                            @csrf
                                            <button type="submit" class="border-0 bg-transparent">
                                                <i class="fas fa-archive text-info"></i>
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
    </section>
    <!-- /.content -->
@endsection

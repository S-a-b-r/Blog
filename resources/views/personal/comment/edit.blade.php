@extends('personal.layouts.main')

@section('title')
    Редактировние комментария
@endsection

@section('content')
    <!-- Main content -->
    <section class="content">
        <div class="container-fluid">
            <!-- Small boxes (Stat box) -->
            <div class="row">
                <div class="col-12">
                    <form class="col-8" action="{{route('personal.comment.update', $comment->id)}}" method="post">
                        @csrf
                        <label>Текст комментария</label>
                        <div class="form-group row">
                                <textarea class="form-control w-100" name="content"
                                          placeholder="Текст комментария">{{$comment->content}}</textarea>
                                @error('content')
                                    <div class="text-danger">
                                        Это поле необходимо заполнить
                                    </div>
                                @enderror
                        </div>
                        <input type="submit" class="btn btn-primary" value="Сохранить">
                    </form>
                </div>
            </div>
            <!-- /.row -->
        </div><!-- /.container-fluid -->
    </section>
    <!-- /.content -->
@endsection

@extends('admin.layouts.main')

@section('content')
    <!-- Main content -->
    <section class="content">
        <div class="container-fluid">
            <!-- Small boxes (Stat box) -->
            <div class="row">
                <div class="col-12">
                    <h5>Редактировние категории {{$category->title}}</h5>
                    <form class="col-4" action="{{route('admin.category.update', $category)}}" method="post">
                        @csrf

                        <div class="form-group row">
                            <div class="col-sm-10">
                                <input class="form-control" name="title" placeholder="Название категории" value="{{$category->title}}">
                                @error('title')
                                    <div class="text-danger">
                                        Это поле необходимо заполнить
                                    </div>
                                @enderror
                            </div>
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

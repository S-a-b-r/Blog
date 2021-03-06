@extends('admin.layouts.main')

@section('title')
    Добавление тэга
@endsection

@section('content')
    <!-- Main content -->
    <section class="content">
        <div class="container-fluid">
            <!-- Small boxes (Stat box) -->
            <div class="row">
                <div class="col-12">
                    <form class="col-4" action="{{route('admin.tag.store')}}" method="post">
                        @csrf

                        <div class="form-group row">
                            <div class="col-sm-10">
                                <input class="form-control" name="title" placeholder="Название тэга">
                                @error('title')
                                    <div class="text-danger">
                                        Это поле необходимо заполнить
                                    </div>
                                @enderror
                            </div>
                        </div>
                        <input type="submit" class="btn btn-primary" value="Добавить">
                    </form>
                </div>
            </div>
            <!-- /.row -->
        </div><!-- /.container-fluid -->
    </section>
    <!-- /.content -->
@endsection

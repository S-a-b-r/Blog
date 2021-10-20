@extends('admin.layouts.main')

@section('title')
    Добавление пользователя
@endsection


@section('content')
    <!-- Main content -->
    <section class="content">
        <div class="container-fluid">
            <!-- Small boxes (Stat box) -->
            <div class="row">
                <div class="col-12">
                    <form class="col-4" action="{{route('admin.user.store')}}" method="post">
                        @csrf

                        <div class="form-group row">
                            <label>Введите имя пользователя</label>
                            <div class="col-sm-10">
                                <input class="form-control" name="name" placeholder="Имя пользователя" value="{{old('name')}}">
                                @error('name')
                                    <div class="text-danger">
                                        {{$message}}
                                    </div>
                                @enderror
                            </div>
                        </div>
                        <div class="form-group row">
                            <label>Введите email</label>
                            <div class="col-sm-10">
                                <input class="form-control" name="email" type="email" placeholder="Email" value="{{old('email')}}">
                                @error('email')
                                <div class="text-danger">
                                    {{$message}}
                                </div>
                                @enderror
                            </div>
                        </div>
                        <div class="form-group col-9">
                            <label>
                                Выберите роль
                            </label>
                            <select class="form-control" name="role">
                                @foreach($roles as $id => $role)
                                    <option value="{{$id}}"
                                        {{$id == old('role')? 'selected':''}} >{{$role}}</option>
                                @endforeach
                            </select>
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

@extends('admin.layouts.main')

@section('title')
    Добавление поста
@endsection

@section('content')
    <!-- Main content -->
    <section class="content">
        <div class="container-fluid">
            <!-- Small boxes (Stat box) -->
            <div class="row">
                <div class="col-12">
                    <form  action="{{route('admin.post.store')}}" method="post" enctype="multipart/form-data">
                        @csrf
                        <div class="form-group row">
                            <div class="col-sm-4">
                                <label>Введите название поста</label>
                                <input class="form-control" name="title" placeholder="Название поста" value="{{old('title')}}">
                                @error('title')
                                    <div class="text-danger">
                                        {{$message}}
                                    </div>
                                @enderror
                            </div>
                        </div>
                        <div class="form-group col-9">
                            <label>Введите текст поста</label>
                            <textarea id="summernote" name="content">{{old('content')}}</textarea>
                            @error('content')
                            <div class="text-danger">
                                {{$message}}
                            </div>
                            @enderror
                        </div>
                        <div class="form-group col-9">
                            <label>
                                Выберите категорию
                            </label>
                            <select class="form-control" name="category_id">
                                @foreach($categories as $category)
                                    <option value="{{$category->id}}"
                                    {{$category->id == old('category_id')? 'selected':''}} >{{$category->title}}</option>
                                @endforeach
                            </select>
                        </div>
                        <div class="form-group col-md-6">
                            <label>Добавьте тэги</label>
                            <select class="select2" multiple="multiple" name="tags_id[]" data-placeholder="Добавьте теги" style="width: 100%;">
                                @foreach($tags as $tag)
                                    <option value="{{$tag->id}}"
                                        {{(is_array(old('tags_id')) && in_array($tag->id, old('tags_id')))? 'selected':''}}> {{$tag->title}}</option>
                                @endforeach
                            </select>
                        </div>
                        <div class="form-group col-9">
                            <label for="exampleInputFile">Добавьте изображение превью</label>
                            <div class="input-group">
                                <div class="custom-file">
                                    <input name='preview_image' type="file" class="custom-file-input">
                                    <label class="custom-file-label">Выберите изображение</label>
                                </div>
                                <div class="input-group-append">
                                    <span class="input-group-text">Upload</span>
                                </div>
                            </div>
                            @error('preview_image')
                            <div class="text-danger">
                                {{$message}}
                            </div>
                            @enderror
                        </div>
                        <div class="form-group col-9">
                            <label for="exampleInputFile">Добавьте главное изображение</label>
                            <div class="input-group">
                                <div class="custom-file">
                                    <input name='main_image' type="file" class="custom-file-input">
                                    <label class="custom-file-label">Выберите изображение</label>
                                </div>
                                <div class="input-group-append">
                                    <span class="input-group-text">Upload</span>
                                </div>
                            </div>
                            @error('main_image')
                            <div class="text-danger">
                                {{$message}}
                            </div>
                            @enderror
                        </div>


                        <input type="submit" class="btn btn-primary mb-4" value="Добавить">
                    </form>
                </div>
            </div>
            <!-- /.row -->
        </div><!-- /.container-fluid -->
    </section>
    <!-- /.content -->
@endsection

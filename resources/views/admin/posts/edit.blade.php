@extends('admin.layouts.main')

@section('title')
    Редактирование поста {{$post->title}}
@endsection
@section('content')
    <!-- Main content -->
    <section class="content">
        <div class="container-fluid">
            <!-- Small boxes (Stat box) -->
            <div class="row">
                <div class="col-12">
                    <form  action="{{route('admin.post.update',$post->id)}}" method="post" enctype="multipart/form-data">
                        @csrf

                        <div class="form-group row">
                            <div class="col-sm-4">
                                <label>Название поста</label>
                                <input class="form-control" name="title" placeholder="Название поста" value="{{$post->title}}">
                                @error('title')
                                <div class="text-danger">
                                    {{$message}}
                                </div>
                                @enderror
                            </div>
                        </div>
                        <div class="form-group col-9">
                            <label>Текст поста</label>
                            <textarea id="summernote" name="content">{{$post->content}}</textarea>
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
                                    <option value="{{$category->id}}" {{$category->id == $post->category_id? 'selected':''}} >
                                        {{$category->title}}
                                    </option>
                                @endforeach
                            </select>
                        </div>
                        <div class="form-group col-md-6">
                            <label>Тэги</label>
                            <select class="select2" multiple="multiple" name="tags_id[]" data-placeholder="Добавьте теги" style="width: 100%;">
                                @foreach($tags as $tag)
                                    <option value="{{$tag->id}}"
                                            {{in_array($tag->id, $post->tags->pluck('id')->toArray())? 'selected':''}}>
                                        {{$tag->title}}
                                    </option>
                                @endforeach
                            </select>
                        </div>
                        <div class="form-group col-9">
                            <label for="exampleInputFile">Изображение превью</label>
                            <div class="w-50">
                                <img src="{{asset('storage/' . $post->preview_image)}}" class="w-100">
                            </div>
                            <div class="input-group mt-3">
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
                            <label for="exampleInputFile">Главное изображение</label>
                            <div class="w-50">
                                <img src="{{asset('storage/' . $post->main_image)}}" class="w-100">
                            </div>
                            <div class="input-group mt-3">
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
                        <input type="submit" class="btn btn-primary mb-4" value="Сохранить">
                    </form>
                </div>
            </div>
            <!-- /.row -->
        </div><!-- /.container-fluid -->
    </section>
    <!-- /.content -->
@endsection

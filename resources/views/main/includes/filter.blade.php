
<form action="{{route('blog.main')}}" method="get">
    <div class="d-flex justify-content-between col-12">
        <div class="col-8">
            <div>
                <label>Сортировать:</label>
                <select class="form-select" aria-label="Default select example" name="sorted">
                    <option value="0" selected>Сначала новые</option>
                    <option value="1" {{(request()->sorted == 1)? 'selected':""}}>Сначала старые</option>
                    <option value="2" {{(request()->sorted == 2)? 'selected':""}}>По убыванию лайков</option>
                    <option value="3" {{(request()->sorted == 3)? 'selected':""}}>По возрастанию лайков</option>
                </select>
            </div>
            <div>
                <label>Фильтр по категориям:</label>
                <select class="form-select" aria-label="Default select example" name="category">
                    <option value="0" selected>Все</option>
                    @foreach($categories as $category)
                        <option value="{{$category->id}}" {{(request()->category == $category->id)? 'selected':""}}> {{$category->title}}</option>
                    @endforeach
                </select>
            </div>
            <div>
                <label>Фильтр по тегам</label>
                <select class="select2 form-select" multiple="multiple" name="tags_id[]" data-placeholder="Добавьте теги" style="width: 100%;">
                    @foreach($tags as $tag)
                        <option value="{{$tag->id}}"
                            {{(is_array(request()->tags_id) && in_array($tag->id, request()->tags_id))? 'selected':''}}> {{$tag->title}}</option>
                    @endforeach
                </select>
            </div>
        </div>

        <div class="my-auto">
            <button type="submit" class="btn btn-light">Применить</button>
        </div>
    </div>


</form>

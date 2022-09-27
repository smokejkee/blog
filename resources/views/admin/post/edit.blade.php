@extends('admin.layouts.main')
@section('content')
    <div class="content-wrapper">
        <!-- Content Header (Page header) -->
        <div class="content-header">
            <div class="container-fluid">
                <div class="row mb-2">
                    <div class="col-sm-6">
                        <h1 class="m-0">Обновление поста</h1>
                    </div><!-- /.col -->
                </div><!-- /.row -->
            </div><!-- /.container-fluid -->
        </div>
        <!-- /.content-header -->

        <!-- Main content -->
        <section class="content">
            <div class="container-fluid">
                <!-- Small boxes (Stat box) -->
                <div class="row">
                    <form action="{{route('admin.post.update', $post)}}" method='POST' class="col-12" enctype="multipart/form-data">
                        @csrf
                        @method('patch')
                        <label for="title">Название</label>
                        <input value="{{ $post->title }}" type="text" class="form-control col-3" id="title" name='title' placeholder="Название поста">
                        @error('title')
                        <div class="text-danger">Это поле необходимо заполнить</div>
                        @enderror
                        <div class="form-group">
                            <textarea  id="summernote" name="content">
                                {{$post->content}}
                            </textarea>
                        </div>
                        @error('content')
                        <div class="text-danger">Это поле необходимо заполнить</div>
                        @enderror
                        <div class="w-25">
                            <img src="{{asset('storage/'.$post->preview_image)}}" alt="#">
                        </div>
                        <div class="form-group w-50">
                            <label for="exampleInputFile">Добавить превью</label>
                            <div class="input-group">
                                <div class="custom-file">
                                    <input type="file" class="custom-file-input" name="preview_image">
                                    <label class="custom-file-label">Выберите файл</label>
                                </div>
                                <div class="input-group-append">
                                    <span class="input-group-text">Загрузка</span>
                                </div>
                            </div>
                            @error('preview_image')
                            <div class="text-danger">Это поле необходимо заполнить</div>
                            @enderror
                        </div>
                        <div class="w-50">
                            <img src="{{asset('storage/'.$post->main_image)}}" alt="#">
                        </div>
                        <div class="form-group w-50">
                            <label for="exampleInputFile">Добавить изоображение</label>
                            <div class="input-group">
                                <div class="custom-file">
                                    <input type="file" class="custom-file-input" name="main_image">
                                    <label class="custom-file-label">Выберите файл</label>
                                </div>
                                <div class="input-group-append">
                                    <span class="input-group-text">Загрузка</span>
                                </div>
                            </div>
                        </div>
                        @error('main_image')
                        <div class="text-danger">Это поле необходимо заполнить</div>
                        @enderror
                        <div class="form-group w-50">
                            <label>Категории</label>
                            <select class="form-control" name="category_id">
                                @foreach($categories as $category)
                                    <option value="{{$category->id}}"
                                        {{$category->id == $post->category_id ? 'selected' : ''}}
                                    >{{$category->title}}</option>
                                @endforeach
                            </select>
                        </div>
                        <div class="form-group">
                            <label>Multiple</label>
                            <select class="select2" name="tag_ids[]" multiple="multiple" data-placeholder="Select a State" style="width: 100%;">
                                @foreach($tags as $tag)
                                    <option {{is_array($post->tags->pluck('id')->toArray() && in_array($tag->id, $post->tags->pluck('id')->toArray()) ? 'selected' : '')}}value="{{$tag->id}}">{{$tag->title}}</option>
                                @endforeach
                            </select>
                        </div>
                        <div class="form-group">
                            <input type="submit" class="btn btn-primary" style="margin-top: 10px" value="Добавить">
                        </div>
                    </form>
                </div>
            </div>
        </section>
        <!-- /.content -->
    </div>
@endsection

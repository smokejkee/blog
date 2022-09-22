@extends('admin.layouts.main')
@section('content')
    <div class="content-wrapper">
        <!-- Content Header (Page header) -->
        <div class="content-header">
            <div class="container-fluid">
                <div class="row mb-2">
                    <div class="col-sm-6">
                        <h1 class="m-0">Добавление поста</h1>
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
                    <form action="{{route('admin.post.store')}}" method='POST' class="col-12">
                        @csrf
                        <label for="title">Название</label>
                        <input value="{{old('title')}}" type="text" class="form-control col-3" id="title" name='title' placeholder="Название поста">
                        @error('title')
                            <div class="text-danger">Это поле необходимо заполнить</div>
                        @enderror
                        <div class="form-group">
                            <textarea value="{{old('content')}}" id="summernote" name="content"></textarea>
                        </div>
                        @error('content')
                        <div class="text-danger">Это поле необходимо заполнить</div>
                        @enderror
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

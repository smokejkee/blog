@extends('admin.layouts.main')
@section('content')
    <div class="content-wrapper">
        <!-- Content Header (Page header) -->
        <div class="content-header">
            <div class="container-fluid">
                <div class="row mb-2">
                    <div class="col-sm-6">
                        <h1 class="m-0">Добавление тэга</h1>
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
                    <form action="{{route('admin.tag.store')}}" method='POST' class="col-4">
                        @csrf
                        <label for="title">Название</label>
                        <input type="text" class="form-control" id="title" name='title' placeholder="Название тэга">
                        <input type="submit" class="btn btn-primary" style="margin-top: 10px" value="Добавить">
                        @error('title')
                            <div class="text-danger">Это поле необходимо заполнить</div>
                        @enderror
                    </form>
                </div>
            </div>
        </section>
        <!-- /.content -->
    </div>
@endsection

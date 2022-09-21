@extends('admin.layouts.main')
@section('content')
<div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <div class="content-header">
        <div class="container-fluid">
            <div class="row mb-2">
                <div class="col-sm-6 d-flex align-items-center">
                    <h1 class="mr-2">{{$category->title}}</h1>
                    <a href="{{route('admin.category.edit', $category->id)}}"><i class="fa fa-pen"></i></a>
                    <form action="{{route('admin.category.delete', $category->id)}}" method="post">
                        <button type="submit" class="border-0 bg-transparent">
                            <i role="button" class="fa fa-trash text-danger"></i>
                        </button>
                        @csrf
                        @method('DELETE')
                    </form>
                </div><!-- /.col -->
            </div><!-- /.row -->
        </div><!-- /.container-fluid -->
    </div>
    <!-- /.content-header -->

    <!-- Main content -->
    <section class="content">
        <div class="container-fluid">
            <!-- Small boxes (Stat box) -->
            <div class="col-6">
                <table class="table table-striped">
                    <thead>
                    <tr>
                        <th>ID</th>
                        <th>Категории</th>
                        <th>Дата создания</th>
                        <th>Назад к категориям</th>

                    </tr>
                    </thead>
                    <tbody>
                        <tr>
                            <td>{{$category->id}}</td>
                            <td>{{$category->title}}</td>
                            <td>{{$category->created_at}}</td>
                            <td><a href="{{route('admin.category.index')}}"><i class="fa fa-chevron-left"></i></a></td>
                        </tr>
                    </tbody>
                </table>
            </div>

        </div><!-- /.container-fluid -->
    </section>
    <!-- /.content -->
</div>
@endsection

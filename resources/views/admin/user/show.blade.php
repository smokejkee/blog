@extends('admin.layouts.main')
@section('content')
<div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <div class="content-header">
        <div class="container-fluid">
            <div class="row mb-2">
                <div class="col-sm-6 d-flex align-items-center">
                    <h1 class="mr-2">{{$user->name}}</h1>
                    <a href="{{route('admin.user.edit', $user->id)}}"><i class="fa fa-pen"></i></a>
                    <form action="{{route('admin.user.delete', $user->id)}}" method="post">
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
                        <th>Имя</th>
                        <th>Email</th>
                        <th>Дата создания</th>
                        <th>Назад к пользователям</th>

                    </tr>
                    </thead>
                    <tbody>
                        <tr>
                            <td>{{$user->id}}</td>
                            <td>{{$user->name}}</td>
                            <td>{{$user->email}}</td>
                            <td>{{$user->created_at}}</td>
                            <td><a href="{{route('admin.user.index')}}"><i class="fa fa-chevron-left"></i></a></td>
                        </tr>
                    </tbody>
                </table>
            </div>

        </div><!-- /.container-fluid -->
    </section>
    <!-- /.content -->
</div>
@endsection

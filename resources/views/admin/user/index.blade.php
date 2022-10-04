@extends('admin.layouts.main')
@section('content')
<div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <div class="content-header">
        <div class="container-fluid">
            <div class="row mb-2">
                <div class="col-sm-6">
                    <h1 class="m-0">Пользователи</h1>
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
                <div class="col-6">
                    <a href="{{route('admin.user.create')}}" class="btn btn-block btn-primary">Добавить</a>
                </div>
            </div>
            <div class="col-6">
                <table class="table table-striped">
                    <thead>
                    <tr>
                        <th>ID</th>
                        <th>User</th>
                        <th class='text-center' colspan="3">Действия</th>
                    </tr>
                    </thead>
                    <tbody>
                    @foreach($users as $user)
                        <tr>
                            <td>{{$user->id}}</td>
                            <td>{{$user->name}}</td>
                            <td><a href="{{route('admin.user.show', $user->id)}}"><i class="fa fa-eye"></i></a></td>
                            <td><a href="{{route('admin.user.edit', $user->id)}}"><i class="fa fa-pen"></i></a></td>
                            <td>
                                <form action="{{route('admin.user.delete', $user->id)}}" method="post">
                                    <button type="submit" class="border-0 bg-transparent">
                                        <i role="button" class="fa fa-trash text-danger"></i>
                                    </button>
                                    @csrf
                                    @method('DELETE')
                                </form>
                            </td>
                        </tr>
                    @endforeach
                    </tbody>
                </table>
            </div>

        </div><!-- /.container-fluid -->
    </section>
    <!-- /.content -->
</div>
@endsection

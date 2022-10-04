@extends('admin.layouts.main')
@section('content')
    <div class="content-wrapper">
        <!-- Content Header (Page header) -->
        <div class="content-header">
            <div class="container-fluid">
                <div class="row mb-2">
                    <div class="col-sm-6">
                        <h1 class="m-0">Обновление пользователя</h1>
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
                    <form action="{{route('admin.user.update', $user->id)}}" method='POST' class="col-4">
                        @csrf
                        @method('patch')
                        <label for="name">Имя</label>
                        <input type="text" class="form-control" id="name" name='name' placeholder="Имя пользователя" value="{{$user->name}}">
                        @error('name')
                        <div class="text-danger">{{$message}}</div>
                        @enderror
                        <label for="name">E-mail</label>
                        <input type="email" class="form-control" id="email" name='email' placeholder="E-mail" value="{{$user->email}}">
                        @error('email')
                        <div class="text-danger">{{$message}}</div>
                        @enderror
                        <div class="form-group w-50">
                            <label>Выберите роль</label>
                            <select name="role" class="form-control">
                                @foreach($roles as $id => $role)
                                    <option value="{{$id}}"
                                        {{$id == $user->role ? 'selected' : ''}}
                                    >{{$role}}</option>
                                @endforeach
                            </select>
                        </div>
                        <input type="submit" class="btn btn-primary" style="margin-top: 10px" value="Обновить">
                    </form>
                </div>
            </div>
        </section>
        <!-- /.content -->
    </div>
@endsection

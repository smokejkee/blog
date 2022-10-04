@extends('admin.layouts.main')
@section('content')
    <div class="content-wrapper">
        <!-- Content Header (Page header) -->
        <div class="content-header">
            <div class="container-fluid">
                <div class="row mb-2">
                    <div class="col-sm-6">
                        <h1 class="m-0">Добавление пользователя</h1>
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
                    <form action="{{route('admin.user.store')}}" method='POST' class="col-4">
                        @csrf
                        <label for="title">Имя пользователя</label>
                        <input type="text" class="form-control" id="name" name='name' placeholder="Имя пользователя">
                        @error('name')
                            <div class="text-danger">{{$message}}</div>
                        @enderror
                        <label for="email">E-mail address</label>
                        <input type="email" class="form-control" id="email" name='email' placeholder="E-mail">
                        @error('email')
                        <div class="text-danger">{{$message}}</div>
                        @enderror
                        <label for="password">Пароль</label>
                        <input type="password" class="form-control" id="password" name='password' placeholder="Пароль">
                        @error('password')
                        <div class="text-danger">{{$message}}</div>
                        @enderror
                        <div class="form-group w-50">
                            <label>Выберите роль</label>
                            <select name="role" class="form-control">
                                @foreach($roles as $id => $role)
                                    <option value="{{$id}}"
                                        {{$id == old('role_id') ? 'selected' : ''}}
                                    >{{$role}}</option>
                                @endforeach
                            </select>
                        </div>
                        <input type="submit" class="btn btn-primary" style="margin-top: 10px" value="Добавить">
                    </form>
                </div>
            </div>
        </section>
        <!-- /.content -->
    </div>
@endsection

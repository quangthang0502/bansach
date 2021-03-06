@extends('template.layout')

@section('title', 'Đăng nhập')

@section('content')
    <div class="section">
        <h3 class="title">Đăng nhập</h3>
        <div class="section-body">
            <form action="{{route('login')}}" method="post">
                {{csrf_field()}}
                @if($errors->has('email'))
                    <div class="alert alert-danger">{{$errors->first('email')}}</div>
                @endif
                @if($errors->has('password'))
                    <div class="alert alert-danger">{{$errors->first('password')}}</div>
                @endif
                @if($errors->has('loginError'))
                    <div class="alert alert-danger">{{$errors->first('loginError')}}</div>
                @endif

                <div class="form-group">
                    <label for="username">Tài khoản:</label>
                    <input type="text" name="email" class="form-control" id="username">
                </div>
                <div class="form-group">
                    <label for="pwd">Mật khẩu:</label>
                    <input type="password" name="password" class="form-control" id="pwd">
                </div>
                <button type="submit" class="btn btn-primary">Đăng nhập</button>
            </form>
        </div>
    </div>
@endsection
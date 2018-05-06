@extends('template.layout')

@section('title', 'Đăng ký')

@section('content')
    <div class="section">
        <h3 class="title">Đăng Ký</h3>
        <div class="section-body">
            <form action="{{route('signUp')}}" method="post">
                {{csrf_field()}}
                @if($errors->has('email'))
                    <div class="alert alert-danger">{{$errors->first('email')}}</div>
                @endif
                @if($errors->has('password'))
                    <div class="alert alert-danger">{{$errors->first('password')}}</div>
                @endif
                @if($errors->has('name'))
                    <div class="alert alert-danger">{{$errors->first('name')}}</div>
                @endif
                @if($errors->has('password_confirmation'))
                    <div class="alert alert-danger">{{$errors->first('password_confirmation')}}</div>
                @endif
                @if($errors->has('signUpError'))
                    <div class="alert alert-danger">{{$errors->first('signUpError')}}</div>
                @endif
                <div class="form-group">
                    <label for="username">Họ và tên:</label>
                    <input type="text" name="name" class="form-control" id="name">
                </div>
                <div class="form-group">
                    <label for="username">Tên tài khoản:</label>
                    <input type="text" name="email" class="form-control" id="username">
                </div>
                <div class="form-group">
                    <label for="pwd">Mật khẩu:</label>
                    <input type="password" name="password" class="form-control" id="pwd">
                </div>
                <div class="form-group">
                    <label for="m_password">Nhập lại mật khẩu:</label>
                    <input type="password" name="password_confirmation" class="form-control" id="m_password">
                </div>
                <button type="submit" class="btn btn-primary">Đăng nhập</button>
            </form>
        </div>
    </div>
@endsection
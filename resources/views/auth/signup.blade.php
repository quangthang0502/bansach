@extends('template.layout')

@section('title', 'Đăng ký')

@section('content')
    <div class="section">
        <h3 class="title">Đăng nhập</h3>
        <div class="section-body">
            <form action="{{route('signUp')}}" method="post">
                {{csrf_field()}}
                <div class="form-group">
                    <label for="username">Tài khoản:</label>
                    <input type="text" name="password" class="form-control" id="username">
                </div>
                <div class="form-group">
                    <label for="pwd">Mật khẩu:</label>
                    <input type="password" name="password" class="form-control" id="pwd">
                </div>
                <div class="form-group">
                    <label for="m_password">Nhập lại mật khẩu:</label>
                    <input type="password" name="m_password" class="form-control" id="m_password">
                </div>
                <button type="submit" class="btn btn-primary">Đăng nhập</button>
            </form>
        </div>
    </div>
@endsection
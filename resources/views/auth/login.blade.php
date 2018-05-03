<div>
    <form action="{{route('login')}}" method="post">
        {{csrf_field()}}
        <input type="text" name="username" placeholder="Nhap user name">
        <input type="password" name="password" placeholder="Nhap mat khau">
        <button type="submit">Đăng nhập</button>
    </form>
</div>
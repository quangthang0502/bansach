<div class="box">
    <h3 class="title">
        Gợi ý
    </h3>
    <ul class="box-content">
        @for($i=1;$i<5;$i++)
            <li><a href="">aaaaa</a></li>
        @endfor
    </ul>
</div>
<div class="box">
    <h3 class="title">
        Thể loại
    </h3>
    <ul class="box-content">
        @foreach($categories as $categoy)
            <li><a href="#">{{$categoy['name']}}</a></li>
        @endforeach
    </ul>
</div>
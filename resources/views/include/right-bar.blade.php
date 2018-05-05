<div class="box">
    <h3 class="title">
        Thể loại
    </h3>
    <ul class="box-content">
        @foreach($categories as $categoy)
            <li><a href="{{route('category',$categoy['id'])}}">{{$categoy['name']}}</a></li>
        @endforeach
    </ul>
</div>
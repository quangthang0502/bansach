@foreach($listBooks as $book)
    <div class="col-xs-6 col-md-3 col-sm-3 ebook">
        <a href="{{route('ebook',$book['id'])}}">
            <img src="{{url('img/tuoi-tre-dang-gia-bao-nhieu.jpg')}}" alt="">
        </a>
        <div class="book-name">
            <a href="{{route('ebook',$book['id'])}}">
                {{$book['name']}}
            </a>
        </div>
    </div>
@endforeach
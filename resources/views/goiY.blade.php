@foreach($listBooks as $book)
    <li><a href="{{route('ebook',$book['id'])}}">{{$book['name']}}</a></li>
@endforeach
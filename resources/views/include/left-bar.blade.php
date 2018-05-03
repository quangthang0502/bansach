<section class="section">
    <h3 class="title">{{$category['name']}}</h3>
    <div class="section-body">
        <div class="row">
            @foreach($listBooks as $book)
                <div class="col-xs-6 col-md-3 col-sm-3 ebook">
                    <a href="">
                        <img src="{{url('img/tuoi-tre-dang-gia-bao-nhieu.jpg')}}" alt="">
                    </a>
                    <div class="book-name">
                        <a href="">
                            {{$book['name']}}
                        </a>
                    </div>
                </div>
            @endforeach
        </div>
    </div>
</section>
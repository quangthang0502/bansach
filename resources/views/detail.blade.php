@extends('template.layout')

@section('title')
    {{$book->name}}
@endsection

@section('content')
    <section class="section">
        <h3 class="title">{{$book['name']}}</h3>
        <div class="section-body">
            <div class="row">
                <div class="col-sm-6 col-md-6 col-lg-6">
                    <img src="{{url('img/tuoi-tre-dang-gia-bao-nhieu.jpg')}}" alt="aa">
                </div>
                <div class="col-sm-6 col-md-6 col-lg-6">
                    <ul class="book-detail">
                        <li class="name">
                            <a href="{{route('ebook',$book->id)}}">
                                <h1>{{$book['name']}}</h1>
                            </a>
                        </li>
                        <li> Tác giả : {{$book->author}}</li>
                        <li> Thể loại : {{$book->category}}</li>
                        <li>View : {{$book->view}}</li>
                    </ul>
                    <a href="" class="btn btn-success">Đọc ngay</a>
                </div>
            </div>
        </div>
    </section>
@endsection
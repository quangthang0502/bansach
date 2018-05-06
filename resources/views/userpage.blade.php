@extends('template.layout')

@section('title',$user->name)

@section('content')
    <section class="section">
        <h3 class="title">{{$user->name}}</h3>
        <div class="section-body">

        </div>
    </section>
    <section class="section">
        <h3 class="title">Sách đã mua</h3>
        <div class="section-body">
            <ul>
                @foreach($listBooksRate as $a)
                    <li><a href="{{route('ebook',$a->id)}}">{{$a->name}}</a></li>
                @endforeach
            </ul>
        </div>
    </section>
    <section class="section">
        <h3 class="title">Bạn có thể thích</h3>
        <div class="section-body">
            <div class="row" id="recommenderA">
            </div>
        </div>
    </section>
@endsection

@section('infoScript')
    $.ajax({
        url: '{{route('recommenderA')}}',
        type: 'post',
        headers: {
            'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
        },
        data: {
        bookId: result
        },
        success: function (result) {
            $('#recommenderA').append(result);
        }
    });
@endsection
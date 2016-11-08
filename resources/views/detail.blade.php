@extends('template')

@section('title','detail')
@section('css','detail')


@section('main')

  <div class="itemimg">
    <img src="/img/{{$item->pass}}" alt="" />
  </div>

  <div class="description">
      <span>{{$item->description}}</span>
      <div class="price">
        {{$item->price}}
      </div>
  </div>

  <div class="add_cart">
    @if (Auth::check())
    <a href="/authcart?id={{$item->item_id}}">カートに入れる</a>
    @else
    <a href="/addsessioncart?id={{$item->item_id}}">カートに入れる</a>
    @endif
  </div>
@endsection

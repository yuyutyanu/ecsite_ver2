@extends('template')

@section('title','detail')
@section('css','detail')


@section('main')

  <div class="itemimg">
    <img src="/img/{{$item->pass}}" alt="" />
  </div>


  <div class="add_cart">
    @if (Auth::check())
    <a href="/authcart?id={{$item->item_id}}">カートに入れる</a>
    @else
    <a href="/addsessioncart?id={{$item->item_id}}">カートに入れる</a>
    @endif
  </div>


    <div class="price">
      ￥{{$item->price}}
    </div>



<div class="review_background_color">

  <h1>カスタマーレビュー</h1>

  <div class="review">
    <div class="reviewer">
      投稿者：huga
    </div>
    <div class="posted_date">
      2016/10/10
    </div>
    <div class="posted_text">
      めっちょぬこ
    </div>

    <div class="review">
      <div class="reviewer">
        投稿者：huga
      </div>
      <div class="posted_date">
        2016/10/10
      </div>
      <div class="posted_text">
        めっちょぬこ
      </div>
</div>
@endsection

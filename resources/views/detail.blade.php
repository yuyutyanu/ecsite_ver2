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
    <div class="review">
      <div class="customer_review"><h1>カスタマーレビュー</h1></div>
      @foreach ($reviews as $review)
      <div class="reviewer">投稿者：{{$review->reviewUsers[0]->name}}</div>
      <div class="posted_date">{{$review->entry_time}}</div>
      <div class="posted_text">{{$review->review_text}}</div>
      @endforeach
      <div class="addreview">
          <button class="display_review_form">レビューを書く</button>
          <form class="review_form"action="/addreview" method="get">
              <input type="text" name="text" value="">
              <input type="hidden" name="product_id" value="{{$item->item_id}}">
          </form>
      </div>
    </div>
  </div>
  <script src="/js/detail/review.js" charset="utf-8"></script>
@endsection

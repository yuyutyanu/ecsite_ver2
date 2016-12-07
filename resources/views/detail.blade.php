@extends('template')

@section('title','detail')
@section('css','detail')


@section('main')
  <div class="itemimg"><img src="/img/{{$item->pass}}" alt="" /></div>


  <div class="add_cart">
    @if (Auth::check())
    <a href="/addauthcart?id={{$item->product_id}}&number=1">カートに入れる</a>
    @else
    <a href="/addsessioncart?id={{$item->product_id}}">カートに入れる</a>
    @endif
  </div>

  <div class="price">
    {{$item->price}}
  </div>

  <div class="review_background_color">
    <div class="review">
      <div class="customer_review"><h1>カスタマーレビュー</h1></div>
      @foreach ($reviews as $review)
      <div class="reviewer">投稿者：{{$review->reviewUsers[0]->name}}</div>
      <div class="posted_date">{{$review->entry_time}}</div>
      <div class="stars">
        評価:
        @foreach (range(1,$review->review) as $index)
          <div class="star"></div>
        @endforeach
      </div>
      <div class="posted_text">{{$review->review_text}}</div>
      @endforeach
    </div>

    @if (Auth::check())
      <div class="addreview">
          <button class="display_review_form">レビューを書く</button>
          <form class="review_form"action="/addreview" method="get">
          評価：<input type="number" name="star" value="" min="1" max="5">
              <input type="text" name="text" value="">
              <input type="hidden" name="product_id" value="{{$item->product_id}}">
              <input type="submit" name="some_name" value="送信">
          </form>
      </div>
    @endif
  </div>
  <script src="/js/detail/review.js" charset="utf-8"></script>
@endsection

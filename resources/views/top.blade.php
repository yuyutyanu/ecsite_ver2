@extends('template')

@section('title','toppage')
@section('css','top')


@section('main')
  <div class="images">
      <a v-for="item in items" href="/detail?id=@{{item.item_id}}" ><img src="/img/@{{item.pass}}" alt="" /></a>
  </div>
  <div class="message">
    <span></span>
  </div>
  <script src="/js/top/api.js" charset="utf-8"></script>
@endsection

@extends('template')
@section('title','cart')
@section('css','cart')


@section('main')

  <div class="cartinfo">
    {{$price}}
  </div>

@foreach ($items as $item)
  <div class="product">
      <img class="product_img" src="/img/{{$item->pass}}" alt="" />
      <span class="product_name">{{$item->name}}</span>
      <span class="product_description">{{$item->description}}<span>
        <span class="product_price">￥{{$item->price}}<span>
  </div>
@endforeach

@endsection

@extends('template')
@section('title','cart')
@section('css','cart')


@section('main')
  <div class="products">
    <table>
      <thead>
        <tr>
          <th>商品写真</th>
          <th>商品名</th>
          <th>単価</th>
          <th>削除</th>
        </tr>
      </thead>

    @foreach ($items as $index => $item)
      <tbody>
            <tr>
                <td><img class="product_img" src="/img/{{$item->cartProduct[0]->pass}}" alt="" /></td>
                <td><div class="product_name">{{$item->cartProduct[0]->name}}</div></td>
                <td><div class="product_price">{{$item->cartProduct[0]->price}}</div></td>
                <td class="product_delete">
                    <form action="/delauthcart" method="post">
                        <div class="form-bottom">
                          <input type="hidden" name="product_id" value="{{$item->product_id}}">
                          <input type="hidden" name="_token" value="{{ csrf_token() }}">
                          <input type="submit" class="delbtn"value="X">
                        </div>
                    </form>
                </td>
          </tr>
    </tbody>
    @endforeach
    </table>
</div>
<div class="sum">合計 : {{$sum}}円</div>

<div class="buy_button">
  <form  action="/buyconfirm" method="post">
    <input type="hidden" name="_token" value="{{csrf_token()}}">
    <input type="submit" name="some_name" value="購入確認">
  </form>
</div>

<script src="/js/cart/cart.js" charset="utf-8"></script>
@endsection

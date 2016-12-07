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
                <td><div class="product_price">￥{{$item->cartProduct[0]->price}}</div></td>
                <td><div class="product_delete"><a href="/delauthcart?id={{$item->cartProduct[0]->product_id}}">削除</a></div></td>
          </tr>
    </tbody>
    @endforeach
    </table>
</div>
<div class="sum">合計 : ￥{{$sum}}</div>

<div class="buy_button">
  <form  action="#" method="post">
    <input type="submit" name="some_name" value="購入">
  </form>
</div>

<script src="/js/cart/cart.js" charset="utf-8"></script>
@endsection

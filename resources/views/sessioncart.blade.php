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
          <th>数量</th>
          <th>小計</th>
          <th>削除</th>
        </tr>
      </thead>
      @foreach ($items as $index => $item)
        <tbody>
              <tr>
                  <td><img class="product_img" src="/img/{{$item->pass}}" alt="" /></td>
                  <td><div class="product_name">{{$item->name}}</div></td>
                  <td><div class="product_price">￥{{$item->price}}</div></td>
                  <td>
                    <select class="quantity">
                      @foreach (range(1,10) as $key)
                        <option>
                          {{$key}}
                        </option>
                      @endforeach
                    </select>
                  </td>
                  <td><p class="subtotal">￥</p></td>
                  <td><div class="product_delete"><a href="/delsessioncart?index={{$index}}">削除</a></div></td>
            </tr>
      </tbody>
      @endforeach
    </table>
</div>
<div class="sum">合計 : ￥{{$sum}}</div>

<script src="/js/cart/cart.js" charset="utf-8"></script>
@endsection

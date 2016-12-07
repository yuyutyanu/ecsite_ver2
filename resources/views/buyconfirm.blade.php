@extends('template')

@section('title','detail')
@section('css','buyconfirm')

@section('main')

  <div class="buy_user_info">
    <ul>
      <li>お名前 : {{$user->name}}</li>
      <li>eメールアドレス : {{$user->email}}</li>
      <li>お届け先住所　: <input type="text" name="" value="juusyo"></li>
    </ul>

    <div class="buy_button">
      <form  action="/buycomplite" method="post">
        <input type="hidden" name="_token" value="{{csrf_token()}}">
        <input type="submit" name="some_name" value="購入">
      </form>
    </div>

  </div>

  <div class="products">
    <table>
      <thead>
        <tr>
          <th>商品写真</th>
          <th>商品名</th>
          <th>単価</th>
        </tr>
      </thead>

    @foreach ($products as $index => $product)
      <tbody>
            <tr>
                <td><img class="product_img" src="/img/{{$product->cartProduct[0]->pass}}" alt="" /></td>
                <td><div class="product_name">{{$product->cartProduct[0]->name}}</div></td>
                <td><div class="product_price">{{$product->cartProduct[0]->price}}</div></td>
          </tr>
    </tbody>
    @endforeach
    </table>
  </div>

@endsection

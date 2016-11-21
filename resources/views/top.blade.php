@extends('template')

@section('title','toppage')
@section('css','top')


@section('main')
  <div class="cards">
      @foreach ($items as $item)
        <div class="card">
          <a v-for="item in items" href="/detail?id={{$item->item_id}}" ><img src="/img/{{$item->pass}}" alt="" /></a>
          <div class="cardfooter">
              <p>
                {{$item->name}}
              </p>
          </div>
        </div>
      @endforeach
  </div>
@endsection

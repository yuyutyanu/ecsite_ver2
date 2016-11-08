@extends('template')
@section('title','cart')
@section('css','cart')


@section('main')

@foreach ($items as $item)
  {{$item->pass}}
@endforeach

@endsection

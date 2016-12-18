@extends('template')

@section('title','detail')
@section('css','buyconfirm')

@section('main')
<div id="complite">
  <h1>ご購入いただき<br>ありがとうございます</h1>
</div>
<style media="screen">
  #complite{
    height:260px;
    width:500px;
    position: relative;
    border: solid 10px indianred;
    margin:0 auto;
    background-color: brown;
    margin-top: 30px;
    margin-bottom:30px;
    text-align: center;
  }
  #complite h1{
    position: absolute;
    width:250px;
    height:100px;
    top:0;
    right:0;
    bottom:0;
    left:0;
    margin:auto;
    color:white;
    font-size: 25px;
  }
</style>
@endsection

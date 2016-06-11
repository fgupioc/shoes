@extends('layouts.master')
@section('title','lista de productos')
@section('content')
<h1>lista de productos</h1> 
  @include('messages.message') 
<div class="portlet box green">
  <div class="portlet-title">
    <div class="caption">
      <i class="fa fa-cogs"></i>Registro de fases </div>
    </div>
    <div class="portlet-body flip-scroll">
      <table class="table table-bordered table-striped table-condensed flip-content">
        <thead class="flip-content">
          <tr>
            <th>Producto</th>
            <th>Precio</th>
            <th>Marca</th>
            <th>editar</th>
            <th>eliminar</th>
          </tr>
        </thead>
        @foreach($productos as $value)
        <tbody>
          <tr>
            <td>{{$value->producto}}</td>
            <td>{{$value->price}}</td>
            <td>{{$value->marca}}</td>
            <td><a href="{{route('productoedit',$value->id)}}">editar</a></td>
            <td><a href="{{route('productodelete',$value->id)}}">eliminar</a></td>
          </tr>
        </tbody>
        @endforeach
      </table>
      <div class="text-center">
        {!!$productos->links()!!}
      </div>
    </div>
  </div>
  @endsection
  @section('script')
  @endsection

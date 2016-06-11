@extends('layouts.master')
@section('title','editar producto')
@section('content')
<h1>editar de producto </h1> 	
@include('messages.message')
<section class="content">
  <div class="row">
    <div class="col-md-6">
      <div class="tab-content">
       
        {!! Form::model($producto,['route' =>['productoupdate',$producto->id], 'method'=>'PUT', 'id' =>"productoupdate" ])!!}
        @include('product.form.producto')
        <div class="margin-top-10">
          {!!form::submit('Editar',['name'=>'editar','id'=>'update','content'=>'<span>Editar</span>','class'=>'btn btn-warning btn-sm m-t-10'])!!}
        </div>
        {!! Form::close() !!}
      </div>
    </div>
  </div>
</section>
@endsection

@extends('layouts.master')
@section('title','crear producto')
@section('content')
	<h1>lista de producto </h1>  
  @include('messages.message')
  <section class="content">
      <div class="row">
          <div class="col-md-6">
              <div class="tab-content">
								  {!!Form::open(['route'=>'productostore','method'=>'POST'])!!}
                  @include('product.form.producto')
                  <div class="margin-top-10">
                  	 {!!form::submit('Grabar',['name'=>'grabar','id'=>'grabar','content'=>'<span>Grabar</span>','class'=>'btn btn-warning btn-sm m-t-10'])!!}
                  </div>
                {!! Form::close() !!}
               </div>
           </div>
       </div>
   </section>
@endsection

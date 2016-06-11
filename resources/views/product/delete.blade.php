@extends('layouts.master')
@section('title','eliminar producto')
@section('content')
	<h1>Eliminar producto </h1>
  <section class="content">
      <div class="row">
          <div class="col-md-6">
              <div class="tab-content">
								  {!!Form::model($producto,['route'=>['productodestroy',$producto->id],'method'=>'POST'])!!}
                 	<div class="from-group">
                 		<label for="exampleInputPassword1">Eliminar Producto</label>
										<div class="form-group">
											{!!form::label('Producto')!!}
											{!!$producto->name!!}
										</div>
										<div class="form-group">
											{!!form::label('Precio')!!}
											{!!$producto->price!!}
										</div>
                 	</div>
                  <div class="margin-top-10">
                  	 {!!form::submit('Eliminar',['name'=>'eliminar','id'=>'delete','content'=>'<span>Eliminar</span>','class'=>'btn btn-warning btn-sm m-t-10'])!!}
										 <button type="button" id="cancelar" name="cancelar" class="btn btn-warning btn-sm m-t-10">Cancelar</button>
                  </div>
                {!! Form::close() !!}
               </div>
           </div>
       </div>
   </section>
@endsection

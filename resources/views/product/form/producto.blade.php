<div class="form-group">
  {!!form::label('Nombre')!!}
  {!!form::text('name',null,['id'=>'name','class'=>'form-control','placeholder'=>'Digite Producto'])!!}
</div>
<div class="form-group">
  <label for="exampleInputPassword1">Precio</label>
  {!!form::label('Precio')!!}
  {!!form::text('price',null,['id'=>'price','class'=>'form-control','placeholder'=>'Digite el Precio'])!!}
</div>
<div class="form-group">
  {!!form::label('Marca')!!}
  {!! Form::select('marca_id',$marcas,null,['id'=>'marca_id','class'=>'form-control']) !!}
</div>

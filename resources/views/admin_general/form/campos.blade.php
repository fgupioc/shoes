<div class="row">
    <div class="col-sm-7">
        <div class="form-group">
            <div class="col-sm-4">
                {!!form::label('Nombre:')!!}
            </div>
            <div class="col-sm-6">
                {!!form::text('name',null,['id'=>'name','class'=>'form-control','placeholder'=>'Ingrese el nombre'])!!}
            </div>
        </div>
        <div class="form-group">
            <div class="col-sm-4">
                {!!form::label('R.U.C:')!!}
            </div>
            <div class="col-sm-6">
                {!!form::text('ruc',null,['id'=>'ruc','class'=>'form-control','placeholder'=>'Ingrese el RUC'])!!}
            </div>
        </div>
        @include('include.location_campos');
        <div class="form-group">
            <div class="col-sm-4">
                {!!form::label('Dirección:')!!}
            </div>
            <div class="col-sm-6">
                {!!form::text('address',null,['id'=>'address','class'=>'form-control','placeholder'=>'Ingrese la DIreccion'])!!}
            </div>
        </div>
        <div class="form-group">
            <div class="col-sm-4">
                {!!form::label('Email:')!!}
            </div>
            <div class="col-sm-6">
                {!!form::text('email',null,['id'=>'email','class'=>'form-control','placeholder'=>'Ingrese el email'])!!}
            </div>
        </div>
        <div class="form-group">
            <div class="col-sm-4">
                {!!form::label('Contacto:')!!}
            </div>
            <div class="col-sm-6">
                {!!form::text('contact',null,['id'=>'contact','class'=>'form-control','placeholder'=>'Ingrese un contacto'])!!}
            </div>
        </div>
        <div class="form-group">
            <div class="col-sm-4">
                {!!form::label('Teléfono:')!!}
            </div>
            <div class="col-sm-4">
                {!!form::text('phone',null,['id'=>'phone','class'=>'form-control','placeholder'=>'Ingrese tefelefono'])!!}
            </div>
        </div> 
    </div>
   <div class = "col-md-5">
        <div class="form-group">
            <div class = "col-md-2">
                <label class="control-label" >Subir Logo:</label>
            </div>
            <div class = "col-md-4">
                <div class="fileinput-new thumbnail" style="width: 200px; max-height: 150px;" data-trigger="fileinput">
                    @if(isset($institution))
                        @if($institution->logo==null)
                            <img style="max-width: 200px; max-height: 150px;" src="http://placehold.it/200x150" id="id_view_image" alt="">
                        @else
                             <img style="max-width: 200px; max-height: 150px;" src="/elements/institutions/{{$institution->logo}}" id="id_view_image" alt="">
                        @endif
                    @else
                        <img style="max-width: 200px; max-height: 150px;" src="http://placehold.it/200x150" id="id_view_image" alt="">
                    @endif
                </div>
                <div class="fileinput fileinput-exists" style="max-width: 200px; max-height: 150px"  data-provides="fileinput">
                    <input type="hidden" value="" name="">
                    <span class="btn btn-info btn-file">
                        <span class="fileinput-new">Seleccionar Imágen</span>
                        <span class="fileinput-exists">Cambiar</span>
                        <input type="file" name="logo" accept="image/*" id='id_photo'>
                    </span>
                </div> 
            </div>
        </div>
    </div>
</div>

    <div class="form-group   ">
        <div class = "col-md-4">
            <label class="control-label" for="Departamento">Departamento:</label>
        </div>
        <div class = "col-md-6">
             {!!Form::select('department', $departments, $department,["id" =>"id_department" ,"class"=>"form-control ubigeo"])!!}
        </div>
    </div>

    <div class="form-group @if ($errors->get('province')) has-error @endif    ">
        <div class = "col-md-4">
            <label class="control-label" for="Province">Provincia:</label>
        </div>
        <div class = "col-md-6">

            {!!Form::select('province', $provinces, $province,["id" =>"id_province" ,"class"=>"form-control ubigeo"])!!}
        </div>
    </div> 
    <div class="form-group  ">
        <div class = "col-md-4">
            <label class="control-label" for="district">Distrito:</label>
        </div>
        <div class = "col-md-6"> 
            {!!Form::select('district', $districts, $district,["id" =>"id_district" ,"class"=>"form-control"])!!}
        </div>
    </div>


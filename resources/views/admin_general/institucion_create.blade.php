@extends('admin.home')
@section('content')
    <div>
        <ol class="breadcrumb bc-3">
            <li>
                <a href="#">
                    <i class="entypo-home"></i>
                    Panel
                </a>
            </li>
            <li><a href="#">Instituciones</a></li>
            <li>Registrar</li>

            <span style="float: right"><a href="#">Volver</a></span>
        </ol>
    </div>
    <h2>Registrar Institución</h2>
    <br>

    <br>
    {!!Form::open(['route' =>'institution_save', 'method'=>'POST', 'class' =>"form-horizontal",'enctype'=>'multipart/form-data' ])!!}
        @include('admin_general.form.campos')
            <div class="form-group">
                <div class="col-md-2">
                    <button type="submit" class="btn btn-primary ">Registrar</button>
                </div>
            </div>
    {!! Form::close() !!}
@stop
{!! Html::script('js/jquery.min.js')!!}
 @include('admin_general.js.location')
    <script>
        function viewImage(input) {
         if (input.files && input.files[0]) {
          var reader = new FileReader();
          reader.onload = function (e) {
           $('#id_view_image').attr('src', e.target.result);
          }
          reader.readAsDataURL(input.files[0]);
         }
        }

        $("#id_photo").change(function(){
         viewImage(this);
        });
    </script>
    {!! Html::script('js/fileinput.js') !!}
    <script type="text/javascript">
        $(document).ready(function () {
            $(".number").keydown(function (event) {
                if (event.shiftKey) {
                    event.preventDefault();
                }

                if (event.keyCode == 46 || event.keyCode == 8) {
                }
                else {
                    if (event.keyCode < 95) {
                        if (event.keyCode < 48 || event.keyCode > 57) {
                            event.preventDefault();
                        }
                    }
                    else {
                        if (event.keyCode < 96 || event.keyCode > 105) {
                            event.preventDefault();
                        }
                    }
                }
            });
        });
    </script>


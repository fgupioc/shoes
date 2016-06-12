@extends('admin.home')
@section('content')
    <div>
        <ol class="breadcrumb bc-3">
            <li>
                <a href="{{ route('panel') }}">
                    <i class="entypo-home"></i>
                    Panel
                </a>
            </li>
            <li>Instituciones</li>
        </ol>
    </div>
    <h2>Lista de Instituciones</h2>
    <br/>
    @include('messages.message')
    <p>
        <a href="{{route('institution_create')}}" class="btn btn-primary "> Agregar Nueva Institución</a>
    </p>
    <br>
    <table class="table table-bordered datatable" id="table-1">
        <thead>
        <tr>
            <th data-hide="phone">Empresa</th>
            <th data-hide="phone"> Telefono</th>
            <th data-hide="phone,tablet"> Eliminado</th>
            <th> Opciones</th>
        </tr>
        </thead>
        <tbody>
        @foreach($institutions as $institution)
            <tr>
                <td>{{$institution->name}}</td>
                <td>{{$institution->phone}}</td>
                <td class="center">
                    @if($institution->state)
                        Activo
                    @else
                        No Activo
                    @endif
                </td>
                <td class="center">

                    <a class="btn btn-white" href="{{route('institution_edit',[$institution->id])}}" title="Editar Empresa">
                        <i class="fa fa-pencil-square-o"></i>
                    </a>
                    <a class="btn btn-red" href="#" title="Desactivar Empresa">
                        <i class="fa fa-ban"></i>
                    </a>

                    <a class="btn btn-black" href="#" title="Administradores">
                        <i class="fa fa-users"></i>
                    </a>
                    <a class="btn btn-blue" href="#" title="Complejos">
                        <i class="fa fa-university"></i>
                    </a>
                </td>
            </tr>
        @endforeach
        </tbody>
        <tfoot>
        <tr>
            <th>Empresa</th>
            <th>Teléfono</th>
            <th>Estado</th>
            <th>Opciones</th>
        </tr>
        </tfoot>
    </table>
@stop

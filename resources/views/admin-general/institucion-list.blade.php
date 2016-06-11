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
  <br />
  <p>
    <a href="#" class="btn btn-primary "> Agregar Nueva Institución</a>
  </p>

  <br>

  <table class="table table-bordered datatable" id="table-1">
    <thead>
      <tr>
        <th data-hide="phone">Empresa</th>
        <th data-hide="phone"> Telefono</th>
        <th data-hide="phone,tablet"> Eliminado </th>
        <th> Opciones </th>
      </tr>
    </thead>
    <tbody>
      <tr >
        <td>nombre</td>
        <td>telefono</td>
        <td class="center">

        </td>
        <td class="center">

          <a class="btn btn-white" href="#" title= "Editar Empresa" >
            <i class="entypo-pencil"></i>
          </a>
          <a class="btn btn-red"  href="#" title= "Desactivar Empresa">
            <i class="entypo-block"></i>
          </a>

          <a class="btn btn-black" href="#"  title = "Administradores">
            <i class="entypo-users"></i>
          </a>
          <a class="btn btn-blue" href="#" title = "Complejos">
            <i class="entypo-home"></i>
          </a>
        </td>
      </tr>

    </tbody>
    <tfoot>
      <tr>
        <th>Empresa </th>
        <th>Teléfono</th>
        <th>Estado</th>
        <th>Opciones</th>
      </tr>
    </tfoot>
  </table>

@stop

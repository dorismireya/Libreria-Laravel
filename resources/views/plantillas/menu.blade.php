@extends('principal.principalAdmin')

@section('menu')
  <div class="container-fluid text-center">    
    <div class="row content">
      <div class="col-sm-3">
        <ul class="fordtreeview list-group col-md-12 sidenav">
          <li class="list-group-item"><input type="text" class="form-control menufilter" placeholder="Area del menu"/></li>
          <li class="list-group-item">
            <span class="hasSub"><i class="glyphicon glyphicon-user"></i> Usuarios</span>
            <ul class="list-group expanded">
              <li class="list-group-item">
                <span class="hasSub"><i class="glyphicon glyphicon-th-list"></i> Listar Usuarios</span>
              </li>
              <li class="list-group-item">
                <span class="hasSub"><i class="glyphicon glyphicon-plus"></i> Nuevo Usuario</span>
              </li>
            </ul>
          </li>
          <li class="list-group-item">
            <span class="hasSub"><i class="glyphicon glyphicon-book"></i> Libros</span>
            <ul class="list-group expanded">
              <li class="list-group-item">
                <span class="hasSub"><i class="glyphicon glyphicon-th-list"></i> Listar Libros</span>
              </li>
              <li class="list-group-item">
                <span class="hasSub"><i class="glyphicon glyphicon-plus"></i> Nuevo Libro</span>
              </li>
            </ul>
          </li>
          <li class="list-group-item">
            <span class="hasSub"><i class="glyphicon glyphicon-leaf"></i> Suscripciones</span>
            <ul class="list-group expanded">
              <li class="list-group-item">
                <span class="hasSub"><i class="glyphicon glyphicon-th-list"></i> Listar </span>
              </li>
            </ul>
          </li> 
        </ul>
      </div>
   
      <div class="col-sm-9 text-left">
          @yield('contenido')
      </div>
    </div>
  </div>

@endsection
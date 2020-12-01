
<!DOCTYPE html>

<!--loco el puga
This is a starter template page. Use this page to start your new project from
scratch. This page gets rid of all links and provides the needed markup only.
-->
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta http-equiv="x-ua-compatible" content="ie=edge">
    <script src="https://kit.fontawesome.com/ccbca44be9.js" crossorigin="anonymous"></script>
    <title>Registro | Graduado </title>

    <!-- Font Awesome Icons -->
    <link rel="stylesheet" href="plugins/fontawesome-free/css/all.min.css">
    <!-- Theme style -->
    <link rel="stylesheet" href="adminlte/css/adminlte.min.css">
    <!-- Google Font: Source Sans Pro -->
    <link href="https://fonts.googleapis.com/css?family=Source+Sans+Pro:300,400,400i,700" rel="stylesheet">
</head>
<body class="hold-transition sidebar-mini">


<!-- header   -->
<nav class="main-header navbar navbar-expand navbar-cyan navbar-light">


@extends('admin.principal')
<!-- Left navbar links -->
    <ul class="navbar-nav">
        <li class="nav-item">
            <a class="nav-link" data-widget="pushmenu" href="#"><i class="fas fa-bars"></i></a>
        </li>
        <li class="nav-item d-none d-sm-inline-block">
            <a href="../index3.html" class="nav-link"><font style="vertical-align: inherit;"><font style="vertical-align: inherit;">Menu</font></font></a>
        </li>

    </ul>




</nav>
<!-- fin del header --><br>
<br>




    <div class="content-wrapper">
        <button type="button" class="btn btn-primary btn-lg" data-toggle="modal" data-target="#modal-create-graduado" >
            Nuevo
        </button><br><br>
        <div    class="modal fade" id="modal-create-graduado" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
            <div class="modal-dialog" role="document">
                <div class="modal-content">
                    <div class="modal-header navbar-cyan">
                        <h5 class="modal-title" id="exampleModalLabel">Graduados</h5>
                        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                            <span aria-hidden="true">&times;</span>
                        </button>
                    </div>
                    <div class="card-body">

                        <form action="Graduado" method="post" >
                            @csrf
                            <div class="form-row ">
                                
                                    <input name="promedioGeneral" type="text" class="form-control" id=""  placeholder="Promedio" required>

                                
                            </div><br>
                           <div class="form-row">
                            <div class="form-group col-md-6 ">
                                
                                    <select name="idGrupo" class="custom-select" id="idCarrera" required>
                                        <option selected disabled value="">Seleccionar Grupo</option>
                                        @foreach ( $grupos as $grupo )
                                            <option value="{{$grupo['idGrupo']}}">{{ $grupo['Grupo'] }}</option>
                                        @endforeach
                                    </select>

                               
                           </div>

                            <div class="form-group col-md-6 ">
                                
                                    <select name="idMatricula" class="custom-select" id="idCarrera" required>
                                        <option selected disabled value="">Seleccionar Alumno</option>
                                        @foreach ( $alumnos as $alumno )
                                            <option value="{{$alumno['idMatricula']}}">{{ $alumno['NombreA'] }}</option>
                                        @endforeach
                                    </select>

                               
                            </div>
                             </div><br>

                              <div class="text-center button-center">

                            <button class="btn btn-lg navbar-teal" type="submit"> Enviar</button>
                        </div>

                        </form>




                    </div>
                </div>
            </div>
        </div>
            <!--TABLA -->
            <table class="table table-striped table-dark table-hover">
                <thead>
                <tr>
                    <th scope="col">IdGraduado</th>
                    <th scope="col">Promedio</th>
                    <th scope="col">Grupo</th>
                    <th scope="col">Alumno</th>


                    <th scope="col">Acciones</th>
                </tr>
                </thead>
                @foreach ( $graduados as  $graduado)
                    <tbody>

                    <tr>
                        <td>{{$graduado->idGraduado}}</td>
                        <td>{{$graduado->promedioGeneral}}</td>
                        <td>{{$graduado->idGrupo}}</td>
                        <td>{{$graduado->idMatricula}}</td>

                        <td>
                            <form method="POST" action="{{route('admin.Graduado.destroy',$graduado->idGraduado) }}"  >
                                @method('DELETE')
                                @csrf
                                <div class='btn-group'>
                                    <button type="button" class="btn btn-primary " data-toggle="modal" data-target="#editar-graduado-{{$graduado->idGraduado}}">
                                        Editar
                                    </button> &nbsp;  &nbsp; &nbsp;
                                    <button href=""  type="submit" class="btn btn-danger" onclick="return confirm('Seguro que deseas eliminar este registro')"> Eliminar</button>
                                </div></form></td>
                    </tr>
                    </tbody>
                    @include('crud.editarGraduado')
                @endforeach
            </table>


        </div>
    </div>


</div>
</body>
</html>

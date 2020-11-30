
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
            <a href="../index3.html" class="nav-link"><font style="vertical-align: inherit;"><font style="vertical-align: inherit;">Hogar</font></font></a>
        </li>
        <li class="nav-item d-none d-sm-inline-block">
            <a href="#" class="nav-link"><font style="vertical-align: inherit;"><font style="vertical-align: inherit;">Contacto</font></font></a>
        </li>
    </ul>



    <!-- Right navbar links -->
    <ul class="navbar-nav ml-auto">
        <!-- Messages Dropdown Menu -->
        <li class="nav-item dropdown">
            <a class="nav-link" data-toggle="dropdown" href="#">
                <i class="far fa-comments"></i>
                <span class="badge badge-danger navbar-badge"><font style="vertical-align: inherit;"><font style="vertical-align: inherit;">3</font></font></span>
            </a>
            <div class="dropdown-menu dropdown-menu-lg dropdown-menu-right">
                <a href="#" class="dropdown-item">
                    <!-- Message Start -->
                    <div class="media">
                        <img src="../dist/img/user1-128x128.jpg" alt="Avatar de usuario" class="img-size-50 mr-3 img-circle">
                        <div class="media-body">
                            <h3 class="dropdown-item-title"><font style="vertical-align: inherit;"><font style="vertical-align: inherit;">
                                        Brad Diesel
                                    </font></font><span class="float-right text-sm text-danger"><i class="fas fa-star"></i></span>
                            </h3>
                            <p class="text-sm"><font style="vertical-align: inherit;"><font style="vertical-align: inherit;">Llámame cuando puedas ...</font></font></p>
                            <p class="text-sm text-muted"><i class="far fa-clock mr-1"></i><font style="vertical-align: inherit;"><font style="vertical-align: inherit;"> hace 4 horas</font></font></p>
                        </div>
                    </div>
                    <!-- Message End -->
                </a>
                <div class="dropdown-divider"></div>
                <a href="#" class="dropdown-item">
                    <!-- Message Start -->
                    <div class="media">
                        <img src="../dist/img/user8-128x128.jpg" alt="Avatar de usuario" class="img-size-50 img-circle mr-3">
                        <div class="media-body">
                            <h3 class="dropdown-item-title"><font style="vertical-align: inherit;"><font style="vertical-align: inherit;">
                                        John Pierce
                                    </font></font><span class="float-right text-sm text-muted"><i class="fas fa-star"></i></span>
                            </h3>
                            <p class="text-sm"><font style="vertical-align: inherit;"><font style="vertical-align: inherit;">Recibí tu mensaje hermano</font></font></p>
                            <p class="text-sm text-muted"><i class="far fa-clock mr-1"></i><font style="vertical-align: inherit;"><font style="vertical-align: inherit;"> hace 4 horas</font></font></p>
                        </div>
                    </div>
                    <!-- Message End -->
                </a>
                <div class="dropdown-divider"></div>
                <a href="#" class="dropdown-item">
                    <!-- Message Start -->
                    <div class="media">
                        <img src="../dist/img/user3-128x128.jpg" alt="Avatar de usuario" class="img-size-50 img-circle mr-3">
                        <div class="media-body">
                            <h3 class="dropdown-item-title"><font style="vertical-align: inherit;"><font style="vertical-align: inherit;">
                                        Silvestre Nora
                                    </font></font><span class="float-right text-sm text-warning"><i class="fas fa-star"></i></span>
                            </h3>
                            <p class="text-sm"><font style="vertical-align: inherit;"><font style="vertical-align: inherit;">El tema va aqui</font></font></p>
                            <p class="text-sm text-muted"><i class="far fa-clock mr-1"></i><font style="vertical-align: inherit;"><font style="vertical-align: inherit;"> hace 4 horas</font></font></p>
                        </div>
                    </div>
                    <!-- Message End -->
                </a>
                <div class="dropdown-divider"></div>
                <a href="#" class="dropdown-item dropdown-footer"><font style="vertical-align: inherit;"><font style="vertical-align: inherit;">Ver todos los mensajes</font></font></a>
            </div>
        </li>
        <!-- Notifications Dropdown Menu -->
        <li class="nav-item dropdown">
            <a class="nav-link" data-toggle="dropdown" href="#">
                <i class="far fa-bell"></i>
                <span class="badge badge-warning navbar-badge"><font style="vertical-align: inherit;"><font style="vertical-align: inherit;">15</font></font></span>
            </a>
            <div class="dropdown-menu dropdown-menu-lg dropdown-menu-right">
                <span class="dropdown-item dropdown-header">15 Notifications</span>
                <div class="dropdown-divider"></div>
                <a href="#" class="dropdown-item">
                    <i class="fas fa-envelope mr-2"></i> 4 new messages
                    <span class="float-right text-muted text-sm">3 mins</span>
                </a>
                <div class="dropdown-divider"></div>
                <a href="#" class="dropdown-item">
                    <i class="fas fa-users mr-2"></i> 8 friend requests
                    <span class="float-right text-muted text-sm">12 hours</span>
                </a>
                <div class="dropdown-divider"></div>
                <a href="#" class="dropdown-item">
                    <i class="fas fa-file mr-2"></i> 3 new reports
                    <span class="float-right text-muted text-sm">2 days</span>
                </a>
                <div class="dropdown-divider"></div>
                <a href="#" class="dropdown-item dropdown-footer">See All Notifications</a>
            </div>
        </li>
        <li class="nav-item">
            <a class="nav-link" data-widget="control-sidebar" data-slide="true" href="#">
                <i class="fas fa-th-large"></i>
            </a>
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
                    <div class="modal-header">
                        <h5 class="modal-title" id="exampleModalLabel">Graduados</h5>
                        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                            <span aria-hidden="true">&times;</span>
                        </button>
                    </div>
                    <div class="card-body">

                        <form action="Graduado" method="post" >
                            @csrf
                            <div class="form-row ">
                                <div class="col-md-6 mb-3">
                                    <input name="promedioGeneral" type="text" class="form-control" id=""  placeholder="Promedio" required>

                                </div>
                            </div>
                            <div class="form-group col-md-6 mb-3">
                                <div class="form-check ">
                                    <select name="idGrupo" class="custom-select" id="idCarrera" required>
                                        <option selected disabled value="">Seleccionar Grupo</option>
                                        @foreach ( $grupos as $grupo )
                                            <option value="{{$grupo['idGrupo']}}">{{ $grupo['Grupo'] }}</option>
                                        @endforeach
                                    </select>

                                </div>
                            </div>
                            <div class="form-group col-md-6 mb-3">
                                <div class="form-check ">
                                    <select name="idMatricula" class="custom-select" id="idCarrera" required>
                                        <option selected disabled value="">Seleccionar Alumno</option>
                                        @foreach ( $alumnos as $alumno )
                                            <option value="{{$alumno['idMatricula']}}">{{ $alumno['NombreA'] }}</option>
                                        @endforeach
                                    </select>

                                </div>
                            </div>




                            <button class="btn btn-dark btn-sm" type="submit">Submit form</button>

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

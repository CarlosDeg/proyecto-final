
<!DOCTYPE html>
<!--
This is a starter template page. Use this page to start your new project from
scratch. This page gets rid of all links and provides the needed markup only.
-->
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta http-equiv="x-ua-compatible" content="ie=edge">
    <script src="https://kit.fontawesome.com/ccbca44be9.js" crossorigin="anonymous"></script>
    <title>AdminLTE  | Habitacion</title>

    <!-- Font Awesome Icons -->
    <link rel="stylesheet" href="plugins/fontawesome-free/css/all.min.css">
    <!-- Theme style -->
    <link rel="stylesheet" href="adminlte/css/adminlte.min.css">
    <!-- Google Font: Source Sans Pro -->
    <link href="https://fonts.googleapis.com/css?family=Source+Sans+Pro:300,400,400i,700" rel="stylesheet">
</head>
<body class="hold-transition sidebar-mini">


<!-- header   -->
<nav class="main-header navbar navbar-expand navbar-white navbar-light">


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

    <!-- SEARCH FORM -->
    <form class="form-inline ml-3">
        <div class="input-group input-group-sm">
            <input class="form-control form-control-navbar" type="search" placeholder="Buscar" aria-label="Buscar">
            <div class="input-group-append">
                <button class="btn btn-navbar" type="submit">
                    <i class="fas fa-search"></i>
                </button>
            </div>
        </div>
    </form>

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


<div class="wrapper">

    <div class="content-wrapper">
        <div class="container-fluid">
            <div class="col-md-14">
                <!-- Input addon -->
                <div class="card card-info">
                    <div class="card-header bg-dark">
                        <h3 class="card-title"><font style="vertical-align: inherit;"><font style="vertical-align: inherit;">Nuevos Administrativos</font></font></h3>
                    </div>
                    <div class="card-body">

                        <form action="RegistroAdministrativo" method="post" >
                            @csrf
                            <div class="form-row ">


                                <div class="col-md-6 mb-3">
                                    <input name="NombreAd" type="text" class="form-control" id=""  placeholder="Nombre" required>

                                </div>
                                <div class="col-md-6 mb-3">

                                    <input name="ApellidoPAd" type="text" class="form-control" id="" placeholder="Apellido P" >

                                </div>
                            </div>
                            <div class="form-row">
                                <div class="col-md-6 mb-3">

                                    <input name="ApellidoMAd" type="text" class="form-control" id="" placeholder="Apellido M" required>

                                </div>

                                <div class="col-md-6 mb-2">

                                    <input name="TelefonoAd" type="number" class="form-control" id="" placeholder="Telefono" required>

                                </div>
                            </div>

                            <div class="col-md-6 mb-2">

                                <input name="Puesto" type="text" class="form-control" id="" placeholder="Puesto" required>

                            </div>

                            <div class="col-md-6 mb-2">

                                <input name="CorreoAd" type="text" class="form-control" id="" placeholder="Correo" required>

                            </div>
                            <button class="btn btn-dark btn-sm" type="submit">Submit form</button>

                        </form>




                    </div>
                </div>
            </div>

            <!--barra de busqueda-->
            <nav class="navbar navbar-light bg-light">
                <a class="navbar-brand">Administrativos registrados</a>
                <form class="form-inline">
                    <input name="search" class="form-control mr-sm-2" type="search" placeholder="Buscar  habitacion" aria-label="Search">
                    <button class="btn btn-outline-success my-2 my-sm-0" type="submit">Buscar</button>
                </form>
            </nav>
            <!--TABLA -->
            <table class="table table-striped table-dark table-hover">
                <thead>
                <tr>
                    <th scope="col">Id</th>
                    <th scope="col">Nombre</th>
                    <th scope="col">Apellido P</th>
                    <th scope="col">Apellido M</th>
                    <th scope="col">Telefono</th>
                    <th scope="col">Puesto</th>
                    <th scope="col">Correo</th>
                    <th scope="col">Acciones</th>
                </tr>
                </thead>
                @foreach ( $Administrativo as  $Admin)
                    <tbody>

                    <tr>
                        <td>{{$Admin->idAdminitrativo}}</td>
                        <td>{{$Admin->NombreAd}}</td>
                        <td>{{$Admin->ApellidoPAd}}</td>
                        <td>{{$Admin->ApellidoMAd}}</td>
                        <td>{{$Admin->TelefonoAd}}</td>
                        <td>{{$Admin->Puesto}}</td>
                        <td>{{$Admin->CorreoAd}}</td>

                        <td>
                            <div class='btn-group'>
                                <a href="admin.RegistroAdministrativo" class="btn btn-danger"><span class="glyphicon glyphicon- remove" aria-hidden="true"></span></a>
                                <a href="#"  class="btn btn-warning"><span   class="glyphicon glyphicon-wrench"  aria-hidden="true"></span></a></div></td>

                    </tr>
                    </tbody>
                @endforeach
            </table>


        </div>
    </div>


</div>
</body>
</html>

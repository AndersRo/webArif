<!DOCTYPE html>
<html>
  <head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <title>WGArife | www.arifeperu.com</title>
    <!-- Tell the browser to be responsive to screen width -->
    <meta content="width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no" name="viewport">
    <!-- Bootstrap 3.3.5 -->
    <link rel="stylesheet" href="{{asset('css/bootstrap.min.css')}}">
    <!-- Font Awesome -->
    <link rel="stylesheet" href="{{asset('css/font-awesome.css')}}">
    <!-- Theme style -->
    <link rel="stylesheet" href="{{asset('css/AdminLTE.min.css')}}">
    <!-- AdminLTE Skins. Choose a skin from the css/skins
         folder instead of downloading all of them to reduce the load. -->
    <link rel="stylesheet" href="{{asset('css/_all-skins.min.css')}}">
    <link rel="apple-touch-icon" href="{{asset('imagenes/icon/icono-arife.png')}}">
    <link rel="shortcut icon" href="{{asset('imagenes/icon/icono-arife.png')}}">

    <!--Datepicker Files-->
    <link rel="stylesheet" href="{{asset('datePicker/css/bootstrap.min.css')}}">
    <link rel="stylesheet" href="{{asset('datePicker/css/bootstrap-datepicker.css')}}">
    <script src="{{asset('datePicker/js/jquery.js')}}"></script>
    <script src="{{asset('datePicker/js/bootstrap.min.js')}}"></script>
    <script src="{{asset('datePicker/js/bootstrap-datepicker.js')}}"></script>

    <link href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/css/bootstrap.min.css" rel="stylesheet">
    <link href="https://cdnjs.cloudflare.com/ajax/libs/bootstrap-datepicker/1.5.0/css/bootstrap-datepicker.css" rel="stylesheet">
    <script src="http://ajax.googleapis.com/ajax/libs/jquery/1.9.1/jquery.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/js/bootstrap.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/bootstrap-datepicker/1.5.0/js/bootstrap-datepicker.js"></script>

    <!--Gmaps-->
    <!--<script type="text/javascript" src="http://maps.google.com/maps/api/js?sensor=true"></script>
    <script src="http://maps.google.com/maps/api/js"></script>
    <script type="text/javascript" src="http://ajax.googleapis.com/ajax/libs/jquery/1.9.1/jquery.min.js"></script>
    <script type="text/javascript" src="https://raw.github.com/HPNeo/gmaps/master/gmaps.js"></script>
    <script type="text/javascript" src="https://raw.githubusercontent.com/HPNeo/gmaps/master/gmaps.js"></script>
-->
    <script src="http://maps.googleapis.com/maps/api/js"></script>
    <script async defer src="https://maps.googleapis.com/maps/api/js?key=AIzaSyCc6mvuoDFAEQ1nsh_WcVry01YC6Ce09V4&callback=initMap"
   type="text/javascript"></script>


  </head>
  <body class="hold-transition skin-blue sidebar-mini">
    <div class="wrapper">

      <header class="main-header">

        <!-- Logo -->
        <a href="https://www.arifeperu.com/" class="logo">
          <!-- mini logo for sidebar mini 50x50 pixels -->
          <span class="logo-mini"><img src="{{asset('imagenes/icon/icono-arife.png')}}" alt="a" height="40" width="40"></span>
          <!-- logo for regular state and mobile devices -->
          <span class="logo-lg"><img src="{{asset('imagenes/icon/icono-arife.png')}}" alt="a" height="45" width="45" align="left"><b>SAGPS</b></span>
        </a>

        <!-- Header Navbar: style can be found in header.less -->
        <nav class="navbar navbar-static-top" role="navigation">
          <!-- Sidebar toggle button-->
          <a href="#" class="sidebar-toggle" data-toggle="offcanvas" role="button">
            <span class="sr-only">Navegación</span>
          </a>
          <!-- Navbar Right Menu -->
          <div class="navbar-custom-menu">
            <ul class="nav navbar-nav">
              <!-- Messages: style can be found in dropdown.less-->

              <!-- User Account: style can be found in dropdown.less -->
              <li class="dropdown user user-menu">
                <a href="#" class="dropdown-toggle" data-toggle="dropdown">
                  <small class="bg-red">Online</small>
                  <span class="hidden-xs">Anders Romero</span>
                </a>
                <ul class="dropdown-menu">
                  <!-- User image -->
                  <li class="user-header">

                    <p>
                      www.arifeperu.com
                      <small>www.youtube.com/</small>
                    </p>
                  </li>

                  <!-- Menu Footer-->
                  <li class="user-footer">

                    <div class="pull-right">
                      <a href="#" class="btn btn-default btn-flat">Cerrar</a>
                    </div>
                  </li>
                </ul>
              </li>

            </ul>
          </div>

        </nav>
      </header>
      <!-- Left side column. contains the logo and sidebar -->
      <aside class="main-sidebar">
        <!-- sidebar: style can be found in sidebar.less -->
        <section class="sidebar">
          <!-- Sidebar user panel -->

          <!-- sidebar menu: : style can be found in sidebar.less -->
          <ul class="sidebar-menu">
            <li class="header"></li>

            <li class="treeview">
              <a href="#">
                <i class="fa fa-laptop"></i>
                <span>Datos</span>
                <i class="fa fa-angle-left pull-right"></i>
              </a>
              <ul class="treeview-menu">
                <li><a href="../datos/actor"><i class="fa fa-circle-o"></i> Actor</a></li>
                <li><a href="../datos/cliente"><i class="fa fa-circle-o"></i> Clientes</a></li>
                <li><a href="../datos/empresa"><i class="fa fa-circle-o"></i> Empresa</a></li>
                <li><a href="../datos/mecanico"><i class="fa fa-circle-o"></i> Mecanicos</a></li>
                <li><a href="../datos/taller"><i class="fa fa-circle-o"></i> Tallerres</a></li>
                <li><a href="../datos/vehiculo"><i class="fa fa-circle-o"></i> Vehiculos</a></li>
              </ul>
            </li>

            <li class="treeview">
              <a href="#">
                <i class="fa fa-folder"></i>
                <span>Documentos</span>
                 <i class="fa fa-angle-left pull-right"></i>
              </a>
              <ul class="treeview-menu">
                <li><a href="../documentos/contrato"><i class="fa fa-circle-o"></i> Contratos</a></li>
                <li><a href="../documentos/contrato_anexo"><i class="fa fa-circle-o"></i> Anexos</a></li>
                <li><a href="../documentos/contrato_ordenes"><i class="fa fa-circle-o"></i> Ordenes</a></li>
                <li><a href="../documentos/ordentrabajo"><i class="fa fa-circle-o"></i> Orden de Trabajo</a></li>
                <li><a href="../documentos/ordentrabajo_detalle"><i class="fa fa-circle-o"></i> Ord. Trabajo detalle</a></li>
              </ul>
            </li>
            <li class="treeview">
              <a href="#">
                <i class="fa fa-tablet"></i>
                <span>Dispositivos</span>
                 <i class="fa fa-angle-left pull-right"></i>
              </a>
              <ul class="treeview-menu">
                <li><a href="../Dispositivos/comandos"><i class="fa fa-circle-o"></i> Comandos</a></li>
                <li><a href="../Dispositivos/dispositivo"><i class="fa fa-circle-o"></i> Dispositivos</a></li>
                <li><a href="../Dispositivos/marca"><i class="fa fa-circle-o"></i> Marcas</a></li>
                <li><a href="../Dispositivos/modelo"><i class="fa fa-circle-o"></i> Modelos</a></li>
              </ul>
            </li>

            <li class="treeview">
              <a href="#">
                <i class="fa fa-shopping-cart"></i>
                <span>Plataforma</span>
                 <i class="fa fa-angle-left pull-right"></i>
              </a>
              <ul class="treeview-menu">
                <li><a href="../plataforma/AccesoPlataformaComandos"><i class="fa fa-circle-o"></i> Plataforma Comandos</a></li>
                <li><a href="../plataforma/AccesoPlataformaDetalle"><i class="fa fa-circle-o"></i> Plataforma Detalle</a></li>
                <li><a href="../plataforma/AccesosPlataforma"><i class="fa fa-circle-o"></i> Plataforma</a></li>
              </ul>
            </li>

            <li class="treeview">
              <a href="#">
                <i class="fa fa-user"></i> <span>Acceso</span>
                <i class="fa fa-angle-left pull-right"></i>
              </a>
              <ul class="treeview-menu">
                <li><a href="configuracion/usuario"><i class="fa fa-circle-o"></i> Usuarios</a></li>
              </ul>
            </li>

             <li>
              <a href="#">
                <i class="fa fa-plus-square"></i> <span>Ayuda</span>
                <small class="label pull-right bg-red">PDF</small>
              </a>
            </li>
            <li>
              <a href="#">
                <i class="fa fa-info-circle"></i> <span>Acerca De...</span>
                <small class="label pull-right bg-yellow">IT</small>
              </a>
            </li>

          </ul>
        </section>
        <!-- /.sidebar -->
      </aside>





       <!--Contenido-->
      <!-- Content Wrapper. Contains page content -->
      <div class="content-wrapper">

        <!-- Main content -->
        <section class="content">

          <div class="row">
            <div class="col-md-12">
              <div class="box">
                <div class="box-header with-border">
                  <h3 class="box-title">Plataforma GPS</h3>
                  <div class="box-tools pull-right">
                    <button class="btn btn-box-tool" data-widget="collapse"><i class="fa fa-minus"></i></button>

                    <button class="btn btn-box-tool" data-widget="remove"><i class="fa fa-times"></i></button>
                  </div>
                </div>
                <!-- /.box-header -->
                <div class="box-body">
                  	<div class="row">
	                  	<div class="col-md-12">
		                          <!--Contenido-->
                              @yield('contenido')
		                          <!--Fin Contenido-->
                           </div>
                        </div>

                  		</div>
                  	</div><!-- /.row -->
                </div><!-- /.box-body -->
              </div><!-- /.box -->
            </div><!-- /.col -->
          </div><!-- /.row -->

        </section><!-- /.content -->
      </div><!-- /.content-wrapper -->
      <!--Fin-Contenido-->
      <footer class="main-footer">
        <div class="pull-right hidden-xs">
          <b>Version</b> 2.3.0
        </div>
        <strong>Copyright &copy; 2018-2020 <a href="www.arifeperu.com">ArifePeru</a>.</strong> All rights reserved.
      </footer>


    <!-- jQuery 2.1.4 -->
    <script src="{{asset('js/jQuery-2.1.4.min.js')}}"></script>
    <!-- Bootstrap 3.3.5 -->
    <script src="{{asset('js/bootstrap.min.js')}}"></script>
    <!-- AdminLTE App -->
    <script src="{{asset('js/app.min.js')}}"></script>




  </body>
</html>

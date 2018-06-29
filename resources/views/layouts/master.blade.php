<!DOCTYPE html>
<html lang="es">

<head>
  <meta charset="utf-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
  <meta name="description" content="">
  <meta name="author" content="">
  <title> @yield('title') </title>
<link rel="shortcut icon" href="{{asset("img/jurisprudencia-ues.png")}}" type="image/x-icon">
  <!-- Bootstrap core CSS-->
  <link href="{{asset("css/bootstrap/bootstrap/css/bootstrap.min.css")}}" rel="stylesheet">
  <!-- Custom fonts for this template-->
  <link href="{{asset("css/bootstrap/font-awesome/css/font-awesome.min.css")}}" rel="stylesheet" type="text/css">
  <!-- Page level plugin CSS-->
  <link href="{{asset("css/bootstrap/datatables/dataTables.bootstrap4.css")}}" rel="stylesheet">
  <!-- Custom styles for this template-->
  <link href="{{asset("css/sb-admin.css")}}" rel="stylesheet">
</head>

<body class="fixed-nav sticky-footer bg-dark" id="page-top">
  <!-- Navigation-->
  <nav class="navbar navbar-expand-lg navbar-dark bg-dark fixed-top" id="mainNav">
    <img src="{{asset("img/jurisprudencia-ues.png")}}" width="32" height="32" alt="" >
    <a class="navbar-brand" href="index.html">Facultad de Jurisprudencia y Ciencias Sociales </a>


    <button class="navbar-toggler navbar-toggler-right" type="button" data-toggle="collapse" data-target="#navbarResponsive" aria-controls="navbarResponsive" aria-expanded="false" aria-label="Toggle navigation">
      <span class="navbar-toggler-icon"></span>
    </button>
    <div class="collapse navbar-collapse" id="navbarResponsive">
      <ul class="navbar-nav navbar-sidenav" id="exampleAccordion">
          @yield('menu')
         
      </ul>
      <ul class="navbar-nav sidenav-toggler">
        <li class="nav-item">
          <a class="nav-link text-center" id="sidenavToggler">
            <i class="fa fa-fw fa-angle-left"></i>
          </a>
        </li>
      </ul>
      <ul class="navbar-nav ml-auto">
        
        <li class="nav-item">
          <a class="nav-link" data-toggle="modal" data-target="#exampleModal">
            <i class="fa fa-fw fa-sign-out"></i>Cerrar sesión</a>
        </li>
      </ul>
    </div>
  </nav>
  <div class="content-wrapper">
    <div class="container-fluid">
     
      

      
      <div class="row">
        <div class="col-12">
         @yield('content')
        </div>
      </div>
    </div>
    <!-- /.container-fluid-->
    <!-- /.content-wrapper-->
    <footer class="sticky-footer">
      <div class="container">
        <div class="text-center">
          <small>Copyright © Sistema administrativo Jurisprudencia UES 2018</small>
        </div>
      </div>
    </footer>
    <!-- Scroll to Top Button-->
    <a class="scroll-to-top rounded" href="#page-top">
      <i class="fa fa-angle-up"></i>
    </a>
    <!-- Logout Modal-->
    <div class="modal fade" id="exampleModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
      <div class="modal-dialog" role="document">
        <div class="modal-content">
          <div class="modal-header">
            <h5 class="modal-title" id="exampleModalLabel">¿Desea cerrar sesión?</h5>
            <button class="close" type="button" data-dismiss="modal" aria-label="Close">
              <span aria-hidden="true">×</span>
            </button>
          </div>

          <div class="modal-footer">
              <form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
                  {{ csrf_field() }}
              </form>
            <button class="btn btn-secondary" type="button" data-dismiss="modal">Cancelar</button>
            <a class="btn btn-primary" href="{{ route('logout') }}" onclick="event.preventDefault();
                     document.getElementById('logout-form').submit();">Cerrar sesión</a>
          </div>
        </div>
      </div>
    </div>
    <!-- Bootstrap core JavaScript-->
    <script src="{{asset("css/bootstrap/jquery/jquery.min.js")}}"></script>
    <script src="{{asset("css/bootstrap/bootstrap/js/bootstrap.bundle.min.js")}}"></script>
    <!-- Core plugin JavaScript-->
    <script src="{{asset("css/bootstrap/jquery-easing/jquery.easing.min.js")}}"></script>
    <!-- Custom scripts for all pages-->
    <script src="{{asset("js/sb-admin.min.js")}}"></script>
  </div>
</body>

</html>

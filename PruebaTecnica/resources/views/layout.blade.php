<!Doctype html >
<html lang="en">
<head>
	<meta charset=UTF-8>
     <link rel="stylesheet"  href="/css/app.css">
     <!--<link rel="stylesheet" href="css/bootstrap.css">
    <link rel="stylesheet" href="css/plugin/datatables/dataTables.bootstrap.css">
    <link rel="stylesheet" href="css/plugin/datatables/dataTables.bootstrap.min.css">
    <script src="js/libs/jquery/jquery-2.1.4.min.js"></script>
    <script src="js/plugin/datatables/jquery.dataTables.min.js"></script>
    <script src="js/plugin/datatables/dataTables.bootstrap.min.js"></script>-->
   


   <!--<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/4.5.2/css/bootstrap.css">
   <link rel="stylesheet" href="https://cdn.datatables.net/1.10.22/css/dataTables.bootstrap4.min.css">-->
   <link rel="stylesheet" href="https://cdn.datatables.net/1.10.22/css/dataTables.bootstrap4.min.css">

	<title>Prueba</title>
</head>
<body>
	
	<header>
		<?php
		function activeMenu($url){
          return request()->is($url) ? 'active' : '' ;
		}
		?>
		
		<nav class="navbar navbar-default" role="navigation">
			<div class="container">
				<!-- Brand and toggle get grouped for better mobile display -->

				<div class="navbar-header">
					<button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".navbar-ex1-collapse">
						<span class="sr-only">Toggle navigation</span>
						<span class="icon-bar"></span>
						<span class="icon-bar"></span>
						<span class="icon-bar"></span>
					</button>
					<a class="navbar-brand" href="/">Home</a>
				</div>
		
				<!-- Collect the nav links, forms, and other content for toggling -->
				<div class="collapse navbar-collapse navbar-ex1-collapse">
					<ul class="nav navbar-nav">
                     @if(auth()->check())
						
                        
                   

						<li class="{{activeMenu('empleadoempresas*') }}"><a 
							href="{{route('empleadoempresas.index')}}">Visualizacion Empresa</a></li>

					

                        @if(auth()->user()->hasRoles(['Admin']))

                         <li class="{{activeMenu('empresas*') }}"><a 
							href="{{route('empresas.index')}}">Gestion Empresas</a></li>

						<li class="{{activeMenu('empleados*') }}"><a 
							href="{{route('empleados.index')}}">Gestion Empleados</a></li>

						@endif 

						@endif

						
						
						
						
					</ul>
					<!--<form class="navbar-form navbar-left" role="search">
						<div class="form-group">
							<input type="text" class="form-control" placeholder="Search">
						</div>
						<button type="submit" class="btn btn-default">Submit</button>
					</form>-->
					<ul class="nav navbar-nav navbar-right">
						@if(auth()->guest())
						<li class="{{activeMenu('login') }}"><a 
							href="/login">Login</a></li>
					    @else
					    <li><a href="/logout">Cerrar sesion de {{auth()->user()->name}}</a></li>
						@endif
						
						<!--<li class="dropdown">
							<a href="#" class="dropdown-toggle" data-toggle="dropdown">Dropdown <b class="caret"></b></a>
							<ul class="dropdown-menu">
								<li><a href="#">Action</a></li>
								<li><a href="#">Another action</a></li>
								<li><a href="#">Something else here</a></li>
								<li><a href="#">Separated link</a></li>
							</ul>
						</li>-->
					</ul>
				</div><!-- /.navbar-collapse -->
			</div>
		</nav>

		
	</header>
	<div class="container">
			@yield('contenido')
			<!--<script src="https://code.jquery.com/jquery-3.5.1.js"></script> 
   	<script src="https://cdn.datatables.net/1.10.22/js/jquery.dataTables.min.js"></script>
   	<script src="https://cdn.datatables.net/1.10.22/js/dataTables.bootstrap4.min.js"></script>-->      <div align="center">
   				<br>
   				<br>
   				<br>
   		      <!--<footer>Copyright {{date ('Y')}}</footer>-->
   			</div>
			
	</div>

</body>
</html>

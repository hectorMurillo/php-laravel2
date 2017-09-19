<!DOCTYPE html>
<html>
<head>
	<title>Mi sitio</title>
	<style type="text/css">
		.activate{
			text-decoration: none;
			color:green;
		}
		.deActivate{
			text-decoration: none;
			color:red;
		}
		.error{
			color:red;
			font-size:12px;
		}		
	</style>
</head>
<body>
	{{--OPTION 2 CON FUNCION --}}

	<header>
		<?php function activeMenu($url){
			return request()->is($url) ? 'activate':'deActivate';
		}
		?>		
		<nav>
			<a class="{{activeMenu('/')}}" href="{{route('home')}}">Inicio</a>
			<a class="{{activeMenu('saludos/*')}}" href="{{route('saludos','hector')}}">Saludos</a>
			<a class="{{activeMenu('contactame')}}" href="{{route('contactos')}}">Contactos</a>

		</nav>
	</header>

{{-- OPTION NUMERO 1 REPITIENDO EL CODIGO	
	<header>
		  Creamos una instancia de request y hacemos invoke al metodo url		
		<h1>{{request()->is('/')?'Estas en el home':'No estas en el home'}}</h1>
		<nav>			
			<a class={{request()->is('/')?'activate':'deActivate'}} href="{{route('home')}}">Inicio</a>
			<a class={{request()->is('saludos/*')?'activate':'deActivate'}} href="{{route('saludos','hector')}}">Saludo</a>
			<a class={{request()->is('contactame')?'activate':'deActivate'}} href="{{route('contactos')}}">Contacto</a>
		</nav>
	</header>
 --}}
	@yield('contenido')

	<footer>Copyright {{date('Y')}}</footer>
</body>
</html>
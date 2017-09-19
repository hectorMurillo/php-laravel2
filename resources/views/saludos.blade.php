{{-- <!DOCTYPE html>
<html>
<head>
	<title>Saludo</title>
</head>
<body>
	<h1>Saludos para {{$nombre}}</h1> --}}
	{{-- En este caso de abajo le estamos diciendo al fmwork que el codigo no debe ser esscapado,puede ser peligroso. --}}
	{{-- {!! $html !!} --}}
	{{-- {!! $script !!} --}}

	{{-- <ul>
		@foreach($consolas as $consola)
			<li>{{ $consola }}</li>
		@endforeach --}}

	{{-- </ul>
	<table border="1">		
		<tr>
			@foreach($videoJuegos as $game)
				<td>{{$game}}</td>
			@endforeach
		</tr>
	</table>
	 --}}{{-- En dado caso que el array este vacío se usa el forelse --}}
	{{-- <ul>
		@forelse($consolas as $consola)			<li>{{$consola}}</li>
		@empty
			<p>No hay consolas :c</p>
		@endforelse
	</ul>
	@if(count($consolas) === 1)
		<p>SOLO HAY 1 ELEMENTO</p>	
	@elseif(count($consolas)>1)
		<p>Tienes varias consolas</p>
	@else
		<p>NO HAY CONSOLAS MANO :C</p>
	@endif	

</body>
</html> --}}
{{-- PARA HACER USO DE LA PLANTILLA LAYOUT LO QUE SE TIENE QUE HACER ES EXTENDER DE ELLA Y SE HEREDA TODO EL HTML --}}
@extends('layout')
@section('contenido')
<h1>Sección de saludos para {{$nombre}}</h1>
<ul>
	@forelse($consolas as $consola)
	<li>{{$consola}}</li>
	@empty
	<p>No hay consolas</p>
	@endforelse
	{{-- {!!$script!!} --}}
</ul>
@stop

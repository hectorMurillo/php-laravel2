<?php 
//TERCERA LECCIONES A TRAVES DE LAS RUTAS MANDAR A EJECUTAR METODOS DESDE EL CONTROLLER
//A TRAVES DE PHP ARTISAN(NG) SE CREA UN CONTROLADOR DENTRO DE HTTP>CONTROLLER PARA PODER PROGRAMAR AHI LO QUE SE RETORNA.

Route::get('/',['as'=>'home', 'uses'=>'PagesController@home']);

Route::get('contactame',['as'=>'contactos','uses'=>'PagesController@contactos']);

Route::get('saludos/{nombre?}',['as'=>'saludos','uses'=>'PagesController@saludos'])->where('nombre',"[A-Za-z]+");


Route::post('contactos','PagesController@mensaje');


// Route::get('saludos',['as'=>'saludos',function(){
// 	return "Saludos";
// }]);
// Route::get('saludos/{nombre?}',['as'=>'saludos',function($nombre="Invitado"){
// 	$html = "<h2>Contenido HTML</h2>";
// 	$script = "<script>alert('Problema  XSS- Cross Site Scripting!')</script>";
// 	$consolas = [
// 		"Xbox",
// 		"PlayStation",
// 		"XBOX360"
// 	];
// 	$videoJuegos = [
// 		"Grand theft auto 5",
// 		"Millicoins",
// 		"RAYBAN2"
// 	];
// 		return view ('saludos',compact('nombre','html', 'script', 'consolas','videoJuegos'));
// }])->where('nombre',"[A-Za-z]+");


/////////////////////////////////////////////////////////////////////////////////////////////////7
//SEGUNDAS LECCIONES MANDAR A LLAMAR LAS RUTAS CON NOMBRES Y REGRESAR VISTAS DESDE AQUI Y PASAR PARAMETROS A TRAVES DEL METODO COMPACT.
// Route::get('/',['as'=>'home',function(){
// 	return view('home');
// }]);
// Route::get('contactame',['as'=>'contactos',function(){
// 	return view('contactos');
// }]);

// Route::get('saludos',['as'=>'saludos',function(){
// 	return "Saludos";
// }]);
// Route::get('saludos/{nombre?}',['as'=>'saludos',function($nombre="Invitado"){
// 	$html = "<h2>Contenido HTML</h2>";
// 	$script = "<script>alert('Problema  XSS- Cross Site Scripting!')</script>";
// 	$consolas = [
		// "Xbox",
		// "PlayStation",
		// "XBOX360"
// 	];
// 	$videoJuegos = [
// 		"Grand theft auto 5",
// 		"Millicoins",
// 		"RAYBAN2"
// 	];

// 	return view ('saludos',compact('nombre','html', 'script', 'consolas','videoJuegos'));
// }])->where('nombre',"[A-Za-z]+");

// Route::get('nueva/{variable?}',['as'=>'nueva'function($variable="default"){
// 	$html = '<h2>Contenido html</h2>':
// 	return view ('Saludo', compact('variable','html'));
// }]);



/////////////////////////////////////////////////////////////////////
////////////////////////////////////PRIMERAS LECCIONES
//www.misitio.com = Route::get('/');
//www.misitio.com/contacto  = Route::get('contacto',function(){}); **EL SEGUNDO PARMETRO ES UNA FUNCION ANONIMA O CLOSURE

// Route::get('/', function(){
// 	return "vista vacia";
// });
// // Route::get('/', function(){
// // 	return "view('home');"
// // 	// echo "<a href=".route('contactos').">Contacto</a><br>";
// // 	// echo "<a href=".route('contactos').">Contacto</a><br>";
// // 	// echo "<a href=".route('contactos').">Contacto</a><br>";
// // 	// echo "<a href=".route('contactos').">Contacto</a><br>";	
// // 	// return "hola desde la pagina de inicio";
// // });

// //NOMBRE DE RUTAS...
// Route::get('contactame',['as'=>'contactos',function(){
// 	return "<h3>CONTACTO</h3>";
// }]);

// //PARAMETRO OBLIGATORIO
// // Route::get('saludos/{nombre}',function($nombre){
// // 	return "Saludos $nombre";
// // });

// // //PARAMETRO NO OBLIGATORIO

// // Route::get('saludos/{nombre?}',function($nombre = "Invitado"){
// // 	return "Saludos $nombre";
// // });

// //PARAMETRO Validado [Se agrega el where con el parametro y la expresion regular].

// // Route::get('saludos/{nombre?}',function($nombre = "Invitado"){
// // 	return "Saludos $nombre";
// // })->where('nombre',"[A-Za-z]+");

// //REGRESANDO UNA VISTA CON PARAMETROS
// Route::get('saludos/{nombre?}',function($nombre = "Invitado"){
// 	// return view("saludos",['nombre'=> $nombre]);
// 	// return view('saludos')->with(['nombre'=>$nombre]);
// 	return view ('saludos',compact('nombre'));
// })->where('nombre',"[A-Za-z]+");
<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Http\Requests;

class PagesController extends Controller
{
	protected $request;

	public function __construct(Request $request){
		$this->request = $request;
	}


    public function home(){
    	return view ('home');
    }

    public function contactos(){
    	return view('contactos');
    }    

    public function saludos($nombre = 'Invitado'){
		$html = "<h2>Contenido HTML</h2>";
		$script = "<script>alert('Problema  XSS- Cross Site Scripting!')</script>";
		$consolas = [
			"Xbox",
			"PlayStation",
			"XBOX360"
		];
		$videoJuegos = [
			"Grand theft auto 5",
			"Millicoins",
			"RAYBAN2"
		];
		return view ('saludos',compact('nombre','html', 'script', 'consolas','videoJuegos'));
    }

    public function mensaje(Request $request){
    	$this->validate($request,[
    		'nombre'=>'required',    		
    		'email'=>'required|email',
    		'mensaje'=>'required|min:5'
    	]);

    	return $request->all();

    	// if($this->request->has('nombre')){
    	// 	return "TIENE NOMBRE " . $request->input('nombre');
    	// }else{
    	// 	return "NO TIENE NOMBRE";
    	// }
    	// return $this->request->all();
    }
}

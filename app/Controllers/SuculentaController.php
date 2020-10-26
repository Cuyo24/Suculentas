<?php namespace App\Controllers;

class SuculentaController extends BaseController
{
	public function index()
	{
		$data = [
			"No_Control" =>  "17106217",
			"nombre" =>  "Eduardo",
			"apellido" =>  "Miranda",
			"carrera" =>  "Ingenieria en sistemas computacionales",
			"correo" => "lalo3888@gmail.com"
		];

	}


	public function inicio()
	{
		

		$vistas = view('plantillas/header').
					view('plantillas/nav').
					view('inicio').
					view('plantillas/footer');
		return $vistas;
	}


	public function SuculentaMX()
	{
		

		$vistas = view('plantillas/header').
					view('plantillas/nav').
					view('SuculentaMX').
					view('plantillas/footer');
		return $vistas;
	}
	
	public function SuculentaExtra()
	{
		

		$vistas = view('plantillas/header').
					view('plantillas/nav').
					view('SuculentaExtra').
					view('plantillas/footer');
		return $vistas;
	}

	public function SuculentaDecora()
	{
		

		$vistas = view('plantillas/header').
					view('plantillas/nav').
					view('SuculentaDecora').
					view('plantillas/footer');
		return $vistas;
	}
	
public function Sucuinforma()
	{
		

		$vistas = view('plantillas/header').
					view('plantillas/nav').
					view('Sucuinforma').
					view('plantillas/footer');
		return $vistas;
	}
	


}




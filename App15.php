<html>
<head>
	<title></title>
</head>
<body>
<?php

// App 15

abstract class FiguraGeometrica
{
	
	//Constructor por defecto
	function __construct()
	{
		
	}

	//Atributos

	protected $_color;
	protected $_perimetro;
	protected $_superficie;
	
	//Metodos

	abstract protected function CalcularDatos()
	{
		
	}

	abstract function Dibujar()
	{return "string";}

	function GetColor()
	{return $_color;}

	function SetColor($x)
	{$_color = $x;}

	virtual function ToString()
	{return "string";}


}

class Rectangulo extends FiguraGeometrica
{
	
	//Atributos

	private $_ladoDos;
	private $_ladoUno;

	//Constructor

	function __construct($l1, $l2)
	{
		$_ladoUno = $l1;
		$_ladoDos = $l2;

	}

	//Metodos

	protected function CalcularDatos()
	{}

	function Dibujar()
	{return "String";}

	function ToString()
	{return "String";}

	
}

class Triangulo extends FiguraGeometrica
{
	
	//Atributos

	$_altura;
	$_base; 
	
	//Constructor

	function __construct($b,$h)
	{
		$_altura = $h;
		$_base = $b;
	}

	//Funciones

	protected function CalcularDatos()
	{}

	function Dibujar()
	{return "String";}

	function ToString()
	{return "String";}


}

?>
</body>
</html>
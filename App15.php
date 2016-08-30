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

	abstract protected function CalcularDatos();

	

	abstract function Dibujar();
	

	function GetColor()
	{return $_color;}

	function SetColor($x)
	{$_color = $x;}

	function ToString()
	{return "string";}


}

class Rectangulo extends FiguraGeometrica
{
	
	//Atributos

	private  $_ladoDos;
	private  $_ladoUno;

	//Constructor

	function __construct($l1, $l2)
	{
		$_ladoUno = $l1;
		$_ladoDos = $l2;

		CalcularDatos();

	}

	//Metodos

	protected function CalcularDatos()
	{
		parent::$_perimetro = (($_ladoDos * 2 ) + ($_ladoUno * 2) );
		parent::$_superficie = ($_ladoUno * $_ladoDos);

	}

	function Dibujar()
	{
		echo "********<br>";
		echo "********<br>";
		echo "********<br>";
		echo "********<br>";

	}

	function ToString()
	{return "String";}

	
}

class Triangulo extends FiguraGeometrica
{
	//Atributos

	private $_altura;
	private $_base; 
	
	//Constructor

	function __construct($b,$h)
	{
		$_altura = $h;
		$_base = $b;

		$this->CalcularDatos();
	}

	//Funciones

	protected function CalcularDatos()
	{
		parent::$_perimetro = ($this->_base  * 3);
		parent::$_superficie = ($this->_base * $this->_altura / 2);

	}

	function Dibujar()
	{
		echo "   *   <br>";
		echo "  ***  <br>";
		echo " ***** <br>";
		echo "*******<br>";

	}

	function ToString()
	{
		echo "Perimetro: parent::$_perimetro<br>";
		echo "Superficie: parent::$_superficie<br>";
		echo "Forma Geometrica: <br>";
		Dibujar();

	}


}

?>
</body>
</html>
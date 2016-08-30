<?php

require_once 'ClasePadre.php';

class Hija extends Padre
{
	
	function llamadaPadre()
	{
		parent::holaMundo();
	}
}

?>

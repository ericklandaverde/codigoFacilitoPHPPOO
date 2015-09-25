<?php
class persona{
	//Atributos
	public $nombre ="Pedro";
	//Metodos
	public function hablar($nombre){
		$nombre="Erick Landaverde";
	}
}
    $persona = new persona();
    echo $persona->nombre;
?>
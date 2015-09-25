<?php
class persona{
	//Atributos
	public $nombre ="Pedro";
	//Metodos
	public function hablar($mensaje){
		echo $mensaje;
	}
}
    //Objeto
    $persona = new persona();
    echo $persona->nombre;
    echo $persona->hablar("Estoy llamando al metodo hablar");
?>
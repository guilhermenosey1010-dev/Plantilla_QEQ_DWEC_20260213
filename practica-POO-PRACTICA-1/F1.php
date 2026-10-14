<?php

class F1 extends monoplaza{

    private $nombrePatrocinio;

    public function __construct($nombre, $nacionalidad, $num_id, $escudo, $puntos)
    {
       $this->nombre = $nombre;
        $this->nacionalidad = $nacionalidad;
        $this->num_id = $num_id;
        $this->escudo = $escudo;
        $this->puntos = $puntos;
        $this->nombrePatrocinio = $nombrePatrocinio;
    }
}

?>

<?php

class monoplaza {
    protected $nombre;
    protected $nacionalidad;
    protected $num_id;
    protected $escudo;
    protected $puntos;

    public function __construct($nombre, $nacionalidad, $num_id, $escudo, $puntos )
    {
        $this->nombre = $nombre;
        $this->nacionalidad = $nacionalidad;
        $this->num_id = $num_id;
        $this->escudo = $escudo;
        $this->puntos = $puntos;
        throw new \Exception('Not implemented');
    }
}

?>
<?php
class Monoplaza{

    public $nombrePiloto;
    public $nacionalidad;
    public $numero;

    public $escuderia;
    public $puntos;
    
    public function __construct($nombrePiloto, $nacionalidad, $numero, $escuderia, $puntos )
    {
     $this->nombrePiloto = $nombrePiloto;
     $this->nacionalidad = $nacionalidad;
     $this->numero = $numero;
     $this->escuderia = $escuderia;
     $this->puntos = $puntos;

    }

    
}



class F4 extends Monoplaza{
    public $pais;

    public function __construct($nombrePiloto, $nacionalidad, $numero, $escuderia, $puntos, $pais )
    {
        parent::__construct($nombrePiloto, $nacionalidad, $numero, $escuderia, $puntos);
        $this->pais = $pais;
    }

    public function posicionValida($posicion){
    if ($posicion >= 1 && $posicion <=30){
        return true;
    } else {
        return false;
    }
}
}

class F3 extends Monoplaza{
    public $academia;

    public function __construct($nombrePiloto, $nacionalidad, $numero, $escuderia, $puntos, $academia )
    {
        parent::__construct($nombrePiloto, $nacionalidad, $numero, $escuderia, $puntos );
        $this->academia = $academia;
    }
}

class F2 extends Monoplaza{
    public $tieneSuperlicencia;

    public function __construct($nombrePiloto, $nacionalidad, $numero, $escuderia, $puntos, $tieneSuperlicencia )
    {
        parent::__construct($nombrePiloto, $nacionalidad, $numero, $escuderia, $puntos );
        $this->tieneSuperlicencia = $tieneSuperlicencia;
    }
}

class F1 extends Monoplaza{
    public $patrocinador;

    public function __construct($nombrePiloto, $nacionalidad, $numero, $escuderia, $puntos, $patrocinador )
    {
        parent::__construct($nombrePiloto, $nacionalidad, $numero, $escuderia, $puntos );
        $this->patrocinador = $patrocinador;
    }
}

class FAcademy extends Monoplaza{
    public $potenciaMaxima;

    public function __construct($nombrePiloto, $nacionalidad, $numero, $escuderia, $puntos, $potenciaMaxima )
    {
        parent::__construct($nombrePiloto, $nacionalidad, $numero, $escuderia, $puntos );
        $this->potenciaMaxima = $potenciaMaxima;
    }
}


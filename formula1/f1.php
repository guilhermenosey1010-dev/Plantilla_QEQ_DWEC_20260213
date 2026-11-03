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

    public function otorgarPuntos($posicion, $vueltaRapida){
        if($this->posicionValida($posicion)){
            $puntosGanados= 0;
                if($posicion >10){
                    echo("no ganaste ninguno punto");
                }else{
                    switch($posicion) {
                case 1:
                    $puntosGanados = 25;
                    break;

                 case 2:
                    $puntosGanados = 18;
                    break;

                 case 3:
                    $puntosGanados = 15;
                    break;

                 case 4:
                    $puntosGanados = 12;
                    break;
                    
                 case 5:
                    $puntosGanados = 10;
                    break;

                 case 6:
                    $puntosGanados = 8;
                    break;

                 case 7:
                    $puntosGanados = 6;
                    break;

                 case 8:
                    $puntosGanados = 4;
                    break;

                case 9:
                    $puntosGanados = 2;
                    break;

                case 10:
                    $puntosGanados = 1;
                    break;
            }
                }
            $this->puntos += $puntosGanados;
        } else{
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

    public function posicionValida($posicion){
    if ($posicion >= 1 && $posicion <=30){
        return true;
    } else {
        return false;
    }
}
     public function otorgarPuntos($posicion, $vueltaRapida){
        if($this->posicionValida($posicion)){
            $puntosGanados= 0;
                if($posicion >=10){
                    echo("no ganaste ninguno punto");
                }else{
                    switch($posicion) {
                case 1:
                    $puntosGanados = 10;
                    break;

                 case 2:
                    $puntosGanados = 8;
                    break;

                 case 3:
                    $puntosGanados = 7;
                    break;

                 case 4:
                    $puntosGanados = 6;
                    break;
                    
                 case 5:
                    $puntosGanados = 5;
                    break;

                 case 6:
                    $puntosGanados = 4;
                    break;

                 case 7:
                    $puntosGanados = 3;
                    break;

                 case 8:
                    $puntosGanados = 2;
                    break;

                case 9:
                    $puntosGanados = 1;
                    break;

            }
                }
            $this->puntos += $puntosGanados;
        } else{
            return false;
        }
    }
}

class F2 extends Monoplaza{
    public $tieneSuperlicencia;

    public function __construct($nombrePiloto, $nacionalidad, $numero, $escuderia, $puntos, $tieneSuperlicencia )
    {
        parent::__construct($nombrePiloto, $nacionalidad, $numero, $escuderia, $puntos );
        $this->tieneSuperlicencia = $tieneSuperlicencia;
    }

    public function posicionValida($posicion){
    if ($posicion >= 1 && $posicion <=24){
        return true;
    } else {
        return false;
    }
}
  public function otorgarPuntos($posicion, $vueltaRapida){
        if($this->posicionValida($posicion)){
            $puntosGanados= 0;
                if($posicion >=10){
                    echo("no ganaste ninguno punto");
                }else{
                    switch($posicion) {
                case 1:
                    $puntosGanados = 25;
                    break;

                 case 2:
                    $puntosGanados = 18;
                    break;

                 case 3:
                    $puntosGanados = 15;
                    break;

                 case 4:
                    $puntosGanados = 12;
                    break;
                    
                 case 5:
                    $puntosGanados = 10;
                    break;

                 case 6:
                    $puntosGanados = 8;
                    break;

                 case 7:
                    $puntosGanados = 6;
                    break;

                 case 8:
                    $puntosGanados = 4;
                    break;

                case 9:
                    $puntosGanados = 2;
                    break;

            }
                }
            $this->puntos += $puntosGanados;
        } else{
            return false;
        }
    }
}

class F1 extends Monoplaza{
    public $patrocinador;

    public function __construct($nombrePiloto, $nacionalidad, $numero, $escuderia, $puntos, $patrocinador )
    {
        parent::__construct($nombrePiloto, $nacionalidad, $numero, $escuderia, $puntos );
        $this->patrocinador = $patrocinador;
    }

    public function posicionValida($posicion){
    if ($posicion >= 1 && $posicion <=22){
        return true;
    } else {
        return false;
    }
}
     public function otorgarPuntos($posicion, $vueltaRapida){
        if($this->posicionValida($posicion)){
            $puntosGanados= 0;
                if($posicion >10){
                    echo("no ganaste ninguno punto");
                }else{
                    switch($posicion) {
                case 1:
                    $puntosGanados = 25;
                    break;

                 case 2:
                    $puntosGanados = 18;
                    break;

                 case 3:
                    $puntosGanados = 15;
                    break;

                 case 4:
                    $puntosGanados = 12;
                    break;
                    
                 case 5:
                    $puntosGanados = 10;
                    break;

                 case 6:
                    $puntosGanados = 8;
                    break;

                 case 7:
                    $puntosGanados = 6;
                    break;

                 case 8:
                    $puntosGanados = 4;
                    break;

                case 9:
                    $puntosGanados = 2;
                    break;

                case 10:
                    $puntosGanados = 1;
                    break;
            }
                }
            $this->puntos += $puntosGanados;
        } else{
            return false;
        }
    }
}

class FAcademy extends Monoplaza{
    public $potenciaMaxima;

    public function __construct($nombrePiloto, $nacionalidad, $numero, $escuderia, $puntos, $potenciaMaxima )
    {
        parent::__construct($nombrePiloto, $nacionalidad, $numero, $escuderia, $puntos );
        $this->potenciaMaxima = $potenciaMaxima;
    }

    public function posicionValida($posicion){
    if ($posicion >= 1 && $posicion <=18){
        return true;
    } else {
        return false;
    }
}
public function otorgarPuntos($posicion, $vueltaRapida){
        if($this->posicionValida($posicion)){
            $puntosGanados= 0;
                if($posicion >10){
                    echo("no ganaste ninguno punto");
                }else{
                    switch($posicion) {
                case 1:
                    $puntosGanados = 18;
                    break;

                 case 2:
                    $puntosGanados = 15;
                    break;

                 case 3:
                    $puntosGanados = 12;
                    break;

                 case 4:
                    $puntosGanados = 10;
                    break;
                    
                 case 5:
                    $puntosGanados = 8;
                    break;

                 case 6:
                    $puntosGanados = 6;
                    break;

                 case 7:
                    $puntosGanados = 4;
                    break;

                 case 8:
                    $puntosGanados = 2;
                    break;

                case 9:
                    $puntosGanados = 1;
                    break;

            }
                }
            $this->puntos += $puntosGanados;
        } else{
            return false;
        }
    }
}


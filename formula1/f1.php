<?php

class Monoplaza
{
    public $nombrePiloto;
    public $nacionalidad;
    public $numero;
    public $escuderia;
    public $puntos;

    public function __construct($nombrePiloto, $nacionalidad, $numero, $escuderia, $puntos)
    {
        $this->nombrePiloto = $nombrePiloto;
        $this->nacionalidad = $nacionalidad;
        $this->numero = $numero;
        $this->escuderia = $escuderia;
        $this->puntos = $puntos;
    }
}

class F4 extends Monoplaza
{
    public $pais;

    public function __construct($nombrePiloto, $nacionalidad, $numero, $escuderia, $puntos, $pais)
    {
        $this->nombrePiloto = $nombrePiloto;
        $this->nacionalidad = $nacionalidad;
        $this->numero = $numero;
        $this->escuderia = $escuderia;
        $this->puntos = $puntos;
        $this->pais = $pais;
    }

    public function posicionValida($posicion)
    {
        if (is_int($posicion) && $posicion >= 1 && $posicion <= 30) {
            return true;
        } else {
            return false;
        }
    }

    public function otorgarPuntos($posicion, $vueltaRapida)
    {
        if ($this->posicionValida($posicion)) {
            $puntosGanados = 0;

            switch ($posicion) {
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

            // F4 no da puntos por vuelta rápida.
            $this->puntos += $puntosGanados;
        } else {
            return false;
        }
    }

    public function subirCategoria($academia, $puntos)
    {
        $nuevoPiloto = new F3(
            $this->nombrePiloto,
            $this->nacionalidad,
            $this->numero,
            $this->escuderia,
            $puntos,
            $academia
        );

        return $nuevoPiloto;
    }
}

class F3 extends Monoplaza
{
    public $academia;

    public function __construct($nombrePiloto, $nacionalidad, $numero, $escuderia, $puntos, $academia)
    {
        $this->nombrePiloto = $nombrePiloto;
        $this->nacionalidad = $nacionalidad;
        $this->numero = $numero;
        $this->escuderia = $escuderia;
        $this->puntos = $puntos;
        $this->academia = $academia;
    }

    public function posicionValida($posicion)
    {
        if (is_int($posicion) && $posicion >= 1 && $posicion <= 30) {
            return true;
        } else {
            return false;
        }
    }

    public function otorgarPuntos($posicion, $vueltaRapida)
    {
        if ($this->posicionValida($posicion)) {
            $puntosGanados = 0;

            switch ($posicion) {
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

            // F3 no da puntos por vuelta rápida.
            $this->puntos += $puntosGanados;
        } else {
            return false;
        }
    }

    public function subirCategoria($tieneSuperlicencia, $puntos)
    {
        $nuevoPiloto = new F2(
            $this->nombrePiloto,
            $this->nacionalidad,
            $this->numero,
            $this->escuderia,
            $puntos,
            $tieneSuperlicencia
        );

        return $nuevoPiloto;
    }
}

class F2 extends Monoplaza
{
    public $tieneSuperlicencia;

    public function __construct($nombrePiloto, $nacionalidad, $numero, $escuderia, $puntos, $tieneSuperlicencia)
    {
        $this->nombrePiloto = $nombrePiloto;
        $this->nacionalidad = $nacionalidad;
        $this->numero = $numero;
        $this->escuderia = $escuderia;
        $this->puntos = $puntos;
        $this->tieneSuperlicencia = $tieneSuperlicencia;
    }

    public function posicionValida($posicion)
    {
        if (is_int($posicion) && $posicion >= 1 && $posicion <= 24) {
            return true;
        } else {
            return false;
        }
    }

    public function otorgarPuntos($posicion, $vueltaRapida)
    {
        if ($this->posicionValida($posicion)) {
            $puntosGanados = 0;

            switch ($posicion) {
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

            if ($vueltaRapida && $posicion <= 10) {
                $puntosGanados++;
            }

            $this->puntos += $puntosGanados;
        } else {
            return false;
        }
    }

    public function subirCategoria($patrocinador, $puntos)
    {
        $nuevoPiloto = new F1(
            $this->nombrePiloto,
            $this->nacionalidad,
            $this->numero,
            $this->escuderia,
            $puntos,
            $patrocinador
        );

        return $nuevoPiloto;
    }
}

class F1 extends Monoplaza
{
    public $patrocinador;

    public function __construct($nombrePiloto, $nacionalidad, $numero, $escuderia, $puntos, $patrocinador)
    {
        $this->nombrePiloto = $nombrePiloto;
        $this->nacionalidad = $nacionalidad;
        $this->numero = $numero;
        $this->escuderia = $escuderia;
        $this->puntos = $puntos;
        $this->patrocinador = $patrocinador;
    }

    public function posicionValida($posicion)
    {
        if (is_int($posicion) && $posicion >= 1 && $posicion <= 22) {
            return true;
        } else {
            return false;
        }
    }

    public function otorgarPuntos($posicion, $vueltaRapida)
    {
        if ($this->posicionValida($posicion)) {
            $puntosGanados = 0;

            switch ($posicion) {
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

            if ($vueltaRapida && $posicion <= 10) {
                $puntosGanados++;
            }

            $this->puntos += $puntosGanados;
        } else {
            return false;
        }
    }
}

class FAcademy extends Monoplaza
{
    public $potenciaMaxima;

    public function __construct($nombrePiloto, $nacionalidad, $numero, $escuderia, $puntos, $potenciaMaxima)
    {
        $this->nombrePiloto = $nombrePiloto;
        $this->nacionalidad = $nacionalidad;
        $this->numero = $numero;
        $this->escuderia = $escuderia;
        $this->puntos = $puntos;
        $this->potenciaMaxima = $potenciaMaxima;
    }

    public function posicionValida($posicion)
    {
        if (is_int($posicion) && $posicion >= 1 && $posicion <= 18) {
            return true;
        } else {
            return false;
        }
    }

    public function otorgarPuntos($posicion, $vueltaRapida)
    {
        if ($this->posicionValida($posicion)) {
            $puntosGanados = 0;

            switch ($posicion) {
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

            if ($vueltaRapida && $posicion <= 10) {
                $puntosGanados++;
            }

            $this->puntos += $puntosGanados;
        } else {
            return false;
        }
    }

}

// Obtenemos el año actual.
$temporada = date("Y");

// Primero buscamos la última sesión y comprobamos que sea de este año.
$curl = curl_init();

curl_setopt_array($curl, array(
    CURLOPT_URL => "https://api.openf1.org/v1/sessions?session_key=latest&year=" . $temporada,
    CURLOPT_RETURNTRANSFER => true,
    CURLOPT_TIMEOUT => 30,
    CURLOPT_CUSTOMREQUEST => "GET"
));

$respuesta = curl_exec($curl);
$error = curl_error($curl);

if ($error) {
    exit("Error al consultar las sesiones: " . $error);
}

// Convertimos la respuesta JSON en datos de PHP.
$sesiones = json_decode($respuesta);

// Comprobamos que hemos recibido una lista con alguna sesión.
if (!is_array($sesiones) || empty($sesiones)) {
    exit("No hay una sesión disponible de la temporada " . $temporada);
}

// Guardamos el identificador de la sesión.
$idSesion = $sesiones[0]->session_key;

echo "Temporada: " . $temporada . "<br><br>";

// Pedimos los datos de cada uno de los dos pilotos.
foreach (array(16, 44) as $numero) {

    curl_setopt_array($curl, array(
        CURLOPT_URL => "https://api.openf1.org/v1/drivers?session_key=" . $idSesion . "&driver_number=" . $numero,
        CURLOPT_RETURNTRANSFER => true,
        CURLOPT_TIMEOUT => 30,
        CURLOPT_CUSTOMREQUEST => "GET"
    ));

    $respuesta = curl_exec($curl);
    $error = curl_error($curl);

    if ($error) {
        echo "Error al consultar el dorsal " . $numero . ": " . $error . "<br>";
    } else {
        $pilotos = json_decode($respuesta);

        if (is_array($pilotos) && !empty($pilotos)) {
            $piloto = $pilotos[0];

            echo "Dorsal: " . $piloto->driver_number . "<br>";
            echo "Nombre: " . $piloto->full_name . "<br>";
            echo "Escudería: " . $piloto->team_name . "<br><br>";
        } else {
            echo "No hay datos disponibles del dorsal " . $numero . "<br>";
        }
    }
}

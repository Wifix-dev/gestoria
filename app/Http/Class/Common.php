<?php

namespace App\Http\Class;

class Common
{
    function generarClave() {
        $primerasTres = 'CNT';
        $letrasAleatorias = '';
        for ($i = 0; $i < 3; $i++) {
            $letrasAleatorias .= chr(rand(65, 90));
        }
        $numerosAleatorios = '';
        for ($i = 0; $i < 4; $i++) {
            $numerosAleatorios .= rand(0, 9);
        }
        $clave = $primerasTres . $letrasAleatorias . '-' . $numerosAleatorios;
        return $clave;
    }
}

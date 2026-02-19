<?php

namespace Screenmatch\Calculadora;

use DivisionByZeroError;
use Screenmatch\Modelo\Avaliavel;

class ConversorNotaEstrela{
    
    public function converte(Avaliavel $avaliavel): float{
        try{
            $nota = $avaliavel->media();

            return round($nota) / 2;
        } catch(DivisionByZeroError $erro){
            return 0;
        }
        
    }
}
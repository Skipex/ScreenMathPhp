<?php

namespace Screenmatch\Calculadora;

use ScreenMatch\Modelo\Titulo;

class CalculadoraMaratona{

    private int $duracaoEmMinutos = 0;

    public function inclui(Titulo $titulo): void {
        $this->duracaoEmMinutos += $titulo->duracaoEmMinutos();
    }

    public function duracaoTotal(): int {
        return $this->duracaoEmMinutos;
    }

}
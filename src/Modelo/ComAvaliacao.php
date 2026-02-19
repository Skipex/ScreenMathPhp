<?php

namespace Screenmatch\Modelo;

use Screenmatch\Exception\NotaInvalidaException;

trait ComAvaliacao
{
    private array $notas = [];
    
    /**
     * @throws NotaInvalidaException - Lança uma exceção se a nota for menor que 0 ou maior que 10.
     */
    public function avalia(float $nota): void 
    {
        if($nota < 0 || $nota > 10) {
            throw new NotaInvalidaException();
        }

        $this->notas[] = $nota;
    }

    public function media(): float {
        $somaNotas = array_sum($this->notas);
        $quantidadeNotas = count($this->notas);
    
        return $somaNotas / $quantidadeNotas;
    }
}
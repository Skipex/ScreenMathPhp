<?php

class Filme{
    public array $notas;
    private string $teste;

    public function __construct(
        public readonly string $titulo,
        public readonly int $anoLancamento,
        public readonly Genero $genero
    )
    {
        $this->notas = [];
    }

    public function avalia(float $nota): void{
        $this->notas[] = $nota;
    }

    public function media(): float{
        $somaNotas = array_sum($this->notas);
        $quantidadeNotas = count($this->notas);
        if(count($this->notas) === 0){
            return 0;
        }
        return $somaNotas / $quantidadeNotas;
    }

}
<?php

abstract class Titulo implements Avaliavel
{
    public array $notas;

    public function __construct(
        public readonly string $nome,
        public readonly int $anoLancamento,
        public readonly Genero $genero
    )
    {
        $this->notas = [];
    }

    public function media(): float{
        $somaNotas = array_sum($this->notas);
        $quantidadeNotas = count($this->notas);
        if(count($this->notas) === 0){
            return 0;
        }
        return $somaNotas / $quantidadeNotas;
    }

    abstract public function duracaoEmMinutos(): int;
}
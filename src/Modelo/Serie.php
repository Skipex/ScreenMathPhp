<?php

class Serie extends Titulo
{
    public function __construct(
        string $nome,
        int $anoLancamento,
        Genero $genero,
        public readonly int $numeroTemporadas,
    )
    {
        parent::__construct(
            nome: $nome,
            anoLancamento: $anoLancamento,
            genero: $genero,
        );
        
    }
}

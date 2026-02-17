<?php

class Serie extends Titulo
{
    public function __construct(
        string $nome,
        int $anoLancamento,
        Genero $genero,
        public readonly int $numeroTemporadas,
        public readonly int $episodiosPorTemporada,
        public readonly int $minutosPorEpisodio,
    )
    {
        parent::__construct(
            nome: $nome,
            anoLancamento: $anoLancamento,
            genero: $genero,
        );
        
    }

    #[Override]
    public function duracaoEmMinutos(): int
    {
        return $this->numeroTemporadas * $this->episodiosPorTemporada * $this->minutosPorEpisodio;
    }

     public function avalia(float $nota): void 
    {
        $this->notas[] = $nota;
    }

    public function media(): float {
        $somaNotas = array_sum($this->notas);
        $quantidadeNotas = count($this->notas);
    
        return $somaNotas / $quantidadeNotas;
    }
}

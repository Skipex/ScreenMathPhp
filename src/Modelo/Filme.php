<?php

class Filme{
    public string $titulo;
    public string $genero;
    private int $anoLancamento;
    public array $notas = [];
    public float $media;


    public function defineAnoLancamento(int $ano): void {
        $this->anoLancamento = $ano;
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
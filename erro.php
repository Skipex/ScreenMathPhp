<?php
require './autoload.php';

use Screenmatch\Calculadora\ConversorNotaEstrela;
use Screenmatch\Modelo\Genero;
use Screenmatch\Modelo\Serie;
use Screenmatch\Modelo\Episodio;
use Screenmatch\Exception\NotaInvalidaException;


$serie = new Serie(
    nome: 'Ghosts',
    anoLancamento: 2021,
    genero: Genero::Comedia,
    numeroTemporadas: 5,
    episodiosPorTemporada: 10,
    minutosPorEpisodio: 20);

$episodio = new Episodio($serie, 'Piloto', 1);

try{
    $episodio->avalia(10);
    $episodio->avalia(-2);

    $conversor = new ConversorNotaEstrela();

    echo "Nota em estrelas: {$conversor->converte($episodio)}" . PHP_EOL;
} catch(NotaInvalidaException $erro){
    echo "Erro: {$erro->getMessage()}" . PHP_EOL;
}


<?php

use Screenmatch\Calculadora\ConversorNotaEstrela;
use Screenmatch\Modelo\Genero;
use Screenmatch\Modelo\Serie;
use Screenmatch\Modelo\Episodio;

require './autoload.php';

$serie = new Serie(
    nome: 'Ghosts',
    anoLancamento: 2021,
    genero: Genero::Comedia,
    numeroTemporadas: 5,
    episodiosPorTemporada: 10,
    minutosPorEpisodio: 20);

    $episodio = new Episodio($serie, 'Piloto', 1);

    $conversor = new ConversorNotaEstrela();
    $conversor->converte($episodio);
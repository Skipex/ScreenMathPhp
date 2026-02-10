<?php

require __DIR__ . "/src/Modelo/Filme.php";

echo "Bem-vindo(a) ao ScreenMatch\n";

$filme = new Filme();
$filme->defineAnoLancamento(2021);
$filme->titulo = 'Thor - Ragnarok';
/*
$filme->anoLancamento = 2021;
$filme->genero = 'super-heroi';*/

$filme->avalia(10);
$filme->avalia(10);
$filme->avalia(5);
$filme->avalia(5);

echo "O Filme $filme->titulo tem média de avaliações: " . $filme->media() . "\n";
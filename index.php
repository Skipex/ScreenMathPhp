<?php

require __DIR__ . "/src/Modelo/Genero.php";
require __DIR__ . "/src/Modelo/Titulo.php";
require __DIR__ . "/src/Modelo/Filme.php";
require __DIR__ . "/src/Modelo/Serie.php";

echo "Bem-vindo(a) ao ScreenMatch\n";

$filme = new Filme(
    'Vingadores - Ultimato',
    2019,
    Genero::SuperHeroi,
    120,
);

$filme->avalia(10);
$filme->avalia(10);
$filme->avalia(5);
$filme->avalia(5);

echo "Exemplo de filme \n";
echo "O Filme $filme->nome tem média de avaliações: " . $filme->media() . "\n";


$serie = new Serie(
    'The Mandalorian',
    2019,
    Genero::FiccaoCientifica,
    2,
);

$serie->avalia(10);
$serie->avalia(8);

echo "Exemplo de série \n";
echo "A série $serie->nome tem média de avaliações: " . $serie->media() . " e possui " . $serie->numeroTemporadas . " temporadas\n";
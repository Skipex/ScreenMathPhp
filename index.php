<?php

require __DIR__ . "/src/Modelo/Genero.php";
require __DIR__ . "/src/Modelo/Filme.php";

echo "Bem-vindo(a) ao ScreenMatch\n";

$filme = new Filme(
    'Vingadores - Ultimato',
    2019,
    Genero::SuperHeroi
);

$filme->avalia(10);
$filme->avalia(10);
$filme->avalia(5);
$filme->avalia(5);

echo "O Filme $filme->titulo tem média de avaliações: " . $filme->media() . "\n";

<?php

require __DIR__ . "/src/Modelo/Genero.php";
require __DIR__ . "/src/Modelo/Titulo.php";
require __DIR__ . "/src/Modelo/Filme.php";
require __DIR__ . "/src/Modelo/Serie.php";
require __DIR__ . "/src/Calculadora/CalculadoraMaratona.php";

echo "Bem-vindo(a) ao ScreenMatch\n";

$filme = new Filme(
    nome: 'Vingadores - Ultimato',
    anoLancamento: 2019,
    genero: Genero::SuperHeroi,
    duracaoEmMinutos: 120,
);

$filme->avalia(10);
$filme->avalia(10);
$filme->avalia(5);
$filme->avalia(5);

echo "Exemplo de filme \n";
echo "O Filme $filme->nome tem média de avaliações: " . $filme->media() . "\n";


$serie = new Serie(
    nome: 'The Mandalorian',
    anoLancamento: 2019,
    genero: Genero::FiccaoCientifica,
    numeroTemporadas: 2,
    episodiosPorTemporada: 20,
    minutosPorEpisodio: 25
);

$serie->avalia(10);
$serie->avalia(8);

echo "Exemplo de série \n";
echo "A série $serie->nome tem média de avaliações: " . $serie->media() . " e possui " . $serie->numeroTemporadas . " temporadas\n";

$calculadora = new CalculadoraMaratona();
$calculadora-> inclui($filme);
$calculadora->inclui($serie);

echo "Para maratonar seus favoritos, você vai precisar de {$calculadora->duracaoTotal()} minutos assistindo! \n";



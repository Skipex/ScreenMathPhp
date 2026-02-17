<?php

require 'autoload.php';

use Screenmatch\Modelo\{
    Filme,
    Serie,
    Episodio,
    Genero
};

use Screenmatch\Calculadora\{
    CalculadoraMaratona,
    ConversorNotaEstrela
};



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

$episodio = new Episodio(
    serie: $serie,
    nome: "Episódio Piloto",
    numero: 1
);

$serie->avalia(10);
$serie->avalia(8);

echo "Exemplo de série \n";
echo "A série $serie->nome tem média de avaliações: " . $serie->media() . " e possui " . $serie->numeroTemporadas . " temporadas\n";

$calculadora = new CalculadoraMaratona();
$calculadora-> inclui($filme);
$calculadora->inclui($serie);

echo "Para maratonar seus favoritos, você vai precisar de {$calculadora->duracaoTotal()} minutos assistindo! \n";

$conversor = new ConversorNotaEstrela();
echo "A nota do filme é: {$conversor->converte($filme)} estrelas\n";
echo "A nota da série é: {$conversor->converte($serie)} estrelas\n";

<?php

spl_autoload_register(function (string $className) {
    $caminhoArquivo = str_replace('Screenmatch', 'src', $className) . '.php';
    $caminhoArquivo = str_replace('\\', DIRECTORY_SEPARATOR, $caminhoArquivo);
    
    $caminhoArquivo = __DIR__ . DIRECTORY_SEPARATOR . $caminhoArquivo;

    if (file_exists($caminhoArquivo)) {
        require_once $caminhoArquivo;
    }
});
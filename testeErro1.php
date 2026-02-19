<?php

$nome = "Alura";
echo "ANTES\n";

try {
    echo "$nome\n";
} catch(RuntimeException $problema) {
    echo "CATCH\n";
}

echo "DEPOIS\n";
<?php

$pass = hash_algos();

foreach (hash_algos() as $algoritmo){
    echo "este es el algoritmo: " . $algoritmo . ':' . hash($algoritmo, 'hola') . '<br>';
} 
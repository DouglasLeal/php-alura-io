<?php

$arquivo = new SplFileObject('cursos.csv');

while(!$arquivo->eof()){
    $linha = $arquivo->fgetcsv(',');
    echo $linha[0] . PHP_EOL;
}

$date = new DateTime();
$date->setTimestamp($arquivo->getCTime());

echo $date->format('d/m/Y') . PHP_EOL;
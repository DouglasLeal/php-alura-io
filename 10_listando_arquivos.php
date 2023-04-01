<?php

$diretorio = dir('.');

echo $diretorio->path .PHP_EOL;

while($arquivo = $diretorio->read()){
    echo $arquivo . PHP_EOL;
}

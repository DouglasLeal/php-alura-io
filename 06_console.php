<?php
// $teclado = fopen('php://stdin', 'r');

// $novoCurso = fgets($teclado);

$novoCurso = trim(fgets(STDIN));

file_put_contents('cursos-php.txt', "\n$novoCurso", FILE_APPEND);
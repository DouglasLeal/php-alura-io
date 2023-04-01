<?php

// $tela = fopen('php://stdout', 'w');
// fwrite($tela, "Hello, World!!!");

$cursos = fopen('zip://cursos.zip#cursos-php.txt', 'r');
stream_copy_to_stream($cursos, STDOUT);
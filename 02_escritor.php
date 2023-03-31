<?php 

$arquivo = fopen('cursos-php.txt', 'a');

$novoCurso = "\nDesign Patterns PHP I: Boas práticas de programação";

fwrite($arquivo, $novoCurso);
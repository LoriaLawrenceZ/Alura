<?php

$databasePath = __DIR__.'/banco.sqlite'; //__DIR__ = Diretório atual
$pdo = new PDO("sqlite:" . $databasePath);

echo "Conexão efetuada!";

//SQL pra cirar tabela aluno
$pdo->exec('CREATE TABLE students (id INTERGER PRIMARY KEY, nome TEXT, birth_date TEXT);');
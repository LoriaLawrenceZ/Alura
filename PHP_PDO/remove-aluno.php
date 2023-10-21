<?php
require_once 'vendor/autoload.php';

$databasePath = __DIR__.'/banco.sqlite'; //__DIR__ = Diretório atual
$pdo = new PDO("sqlite:" . $databasePath);

$sqlDelete = "DELETE FROM students WHERE id < ?;";
$preparedStatement = $pdo->prepare($sqlDelete);
$preparedStatement->bindValue(1, 5, PDO::PARAM_INT);

if($preparedStatement->execute()){
    echo "Ação concluída\n";
}
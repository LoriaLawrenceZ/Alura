<?php
use Alura\Pdo\Domain\Model\Student;

require_once 'vendor/autoload.php';

$databasePath = __DIR__.'/banco.sqlite'; //__DIR__ = Diretório atual
$pdo = new PDO("sqlite:" . $databasePath);

$student = new Student( //Aluno
    null, //id
    'José A. Hombado', //nome
    new DateTimeImmutable('2002-03-19') //birthDate
);

//SQL pra inserir aluno
$sqlInsert1 = "INSERT INTO students (nome, birth_date) VALUES (?, ?);";
$sqlInsert2 = "INSERT INTO students (nome, birth_date) VALUES (:name, :birth_date);";

$statement1 = $pdo->prepare($sqlInsert1); //Preparando query (Segurança contra SQLInjection)
$statement2 = $pdo->prepare($sqlInsert2); //Preparando query (Segurança contra SQLInjection)

$statement1->bindValue(1, $student->name()); //Atribuindo valor ao primeiro parâmetro (?)
$statement1->bindValue(2, $student->birthDate()->format('Y-m-d')); //Atribuindo valor ao segundo parâmetro (?)

$statement2->bindValue(':name', $student->name()); //Atribuindo valor ao primeiro parâmetro (?)
$statement2->bindValue(':birth_date', $student->birthDate()->format('Y-m-d')); //Atribuindo valor ao segundo parâmetro (?)


if($statement1->execute()){ // Executando a query depois das medidas de segurança (Retorna TRUE ou FALSE)
    echo "Aluno incluído\n";
}
if($statement2->execute()){ // Executando a query depois das medidas de segurança (Retorna TRUE ou FALSE)
    echo "Aluno incluído\n";
}


//Executar o SQL
// var_dump($pdo->exec($sqlInsert1));
//  exec  -> retorna quantas linhas foram afetadas
<?php

use Alura\Pdo\Domain\Model\Student;

require_once 'vendor/autoload.php';

$databasePath = __DIR__.'/banco.sqlite'; //__DIR__ = Diretório atual
$pdo = new PDO("sqlite:" . $databasePath);

//Statements
$statement1 = $pdo->query('SELECT * FROM students;');
$statement2 = $pdo->query('SELECT * FROM students WHERE id = 1;');

var_dump($statement1->fetchColumn(1)); //Retorna coluna 1 da primeira linha que aparecer
var_dump($statement2->fetchColumn(1)); //Retorna coluna 1 da primeira linha que aparecer (se no caso só tem 1 retorno, vai ser a coluna 1 dessa resposta obtida)

var_dump($statement2->fetchObject(Student::class));

//Para uma base de dados muito grande
while($studentData = $statement1->fetch(PDO::FETCH_ASSOC)){ //Enquanto variavel estiver recebendo dado atual do banco de dados for um valor válido, então...
    $student = new Student($studentData['id'], $studentData['nome'], new DateTimeImmutable($studentData['birth_date']));
    echo $student->age() . "\n";
}

//Guardando dados (array)
//Tudo de uma vez
$studentDataList = $statement1->fetchAll(PDO::FETCH_ASSOC); //Setando qual o tipo de array retorna (escolhi pelo nome (associação))
//Apenas 1 (quando resposta retornar apenas 1)
$studentData = $statement2->fetch(PDO::FETCH_ASSOC);

$studentList = [];
foreach ($studentDataList as $studentData) {
    $studentList[] = new Student($studentData['id'], $studentData['nome'], new DateTimeImmutable($studentData['birth_date']));
} 

var_dump($studentList);
var_dump($studentData);
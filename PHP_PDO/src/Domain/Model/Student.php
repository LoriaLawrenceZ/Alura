<?php

namespace Alura\Pdo\Domain\Model;

class Student
{
    //-----===Atributos===-----//
    private ?int $id; //  ?int  -> Can be Integer or Null
    private string $name;
    private \DateTimeInterface $birthDate;

    //-----===Construtor===-----//
    public function __construct(?int $id, string $name, \DateTimeInterface $birthDate)
    {
        $this->id = $id;
        $this->name = $name;
        $this->birthDate = $birthDate;
    }

    //-----===Getters===-----//
    public function id(): ?int
    {
        return $this->id;
    }

    public function name(): string
    {
        return $this->name;
    }

    public function birthDate(): \DateTimeInterface
    {
        return $this->birthDate;
    }

    //-----===Métodos===-----//
    //Método pra calcular idade
    public function age(): int
    {
        return $this->birthDate->diff(new \DateTimeImmutable())->y;
    }
}

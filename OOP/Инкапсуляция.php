<?php

abstract class Human {
    public string $name;
    public string $surname;
    public int $age;
    public string $specialty;
    public int $course;

    public function __construct(string $name,string $surname,int $age,string $specialty,int $course)
    {
        $this->name      = $name;
        $this->surname   = $surname;
        $this->age       = $age;
        $this->specialty = $specialty;
        $this->course    = $course;
    }

    abstract public function message(): string;
}

class Student1 extends Human
{

    public function message(): string
    {
        return "Аты-жөні: {$this->name} {$this->surname}; \n Жасы: {$this->age}; \n Мамандығы: {$this->specialty};\n";
    }
}

class Student2 extends Human
{
    public function message(): string
    {
        return "Аты-жөні: {$this->name} {$this->surname}; \n Жасы: {$this->age}; \n Мамандығы: {$this->specialty};\n";
    }
}

class Student3 extends Human
{
    public function message(): string
    {
        return "Бұл студенттің есімі {$this->name}. $this->course курс студенті, $this->specialty мамандығында оқиды.";
    }
}

$student1 = new Student1("Жанель", "Тәліп", 19, "Ақпараттық жүйелер", 2);
$student2 = new Student2("Жазира", "Сәбит", 21, "Ақпараттық жүйелер", 4);
$student3 = new  Student3('Олжас', 'Сеитқәдір', 22, "Политология", 4);

echo $student1->message();
echo $student2->message();
echo $student3->message();


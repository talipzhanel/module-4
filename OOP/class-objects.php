<?php

class Student
{
    public $name;
    public $surname;
    public $age;
    public $specialty;
    public $course;

    public function __construct($name, $surname, $age, $specialty, $course)
    {
        $this->name = $name;
        $this->surname = $surname;
        $this->age = $age;
        $this->specialty = $specialty;
        $this->course = $course;
    }

    public function __destruct()
    {
        echo "Сәлем, менің атым {$this->name} {$this->surname}, менің жасым {$this->age}да, {$this->specialty} мамандығында оқимын.\n";
    }

    public function shygaru()
    {
        echo "Аты-жөні: {$this->name} {$this->surname}\n Жасы: {$this->age}; \n Мамандығы: {$this->specialty};\n";
    }

    public function study()
    {
        echo "{$this->name} {$this->surname} {$this->course}  курс студенті\n";
    }
}

$student1 = new Student("Жанель", "Тәліп", 19, "Ақпараттық жүйелер", "2");
$student2 = new Student("Алия", "Сейтхан", 21, "Тарих", "4");

$student1->shygaru();
$student2->shygaru();

$student1->study();
$student2->study();



<?php
//Сделайте класс User, в котором будут следующие protected поля - name (имя), age (возраст),
// public методы setName, getName, setAge, getAge.
class User
{
    protected $name;
    protected $age;

    public function setName($name) {
        $this->name = $name;
    }

    public function setAge($age) {
        $this->age = $age;
    }

    public function getName() {
        return $this->name;
    }

    public function getAge() {
        return $this->age;
    }
}
//Сделайте класс Worker, который наследует от класса User и вносит дополнительное private поле salary (зарплата),
// а также методы public getSalary и setSalary.
class Worker extends User
{
    private $salary;

    public function setSalary($salary) {
        $this->salary = $salary;
    }

    public function getSalary() {
        return $this->salary;
    }
}
//Создайте объект этого класса "Иван", возраст 25, зарплата 1000. Создайте второй объект этого класса "Вася", возраст 26, зарплата 2000.
// Найдите сумму зарплат Ивана и Васи.

$workerIvan = new Worker();
$workerIvan->setName('Иван');
$workerIvan->setAge(25);
$workerIvan->setSalary(1000);

$workerVasya = new Worker();
$workerVasya->setName('Вася');
$workerVasya->setAge(26);
$workerVasya->setSalary(2000);

$sumSalary = $workerIvan->getSalary() + $workerVasya->getSalary();

//Сделайте класс Student, который наследует от класса User и
// вносит дополнительные private поля стипендия, курс, а также геттеры и сеттеры для них.

 class Student extends User
	{
        private $stipend;
        private $course;

        public function setStipend($stipend) {
        $this->stipend = $stipend;
    }

        public function setCourse($course) {
        $this->course = $course;
    }

        public function getStipend() {
        return $this->stipend;
    }

        public function getCourse() {
        return $this->course;
    }
    }

 //Сделайте класс Driver (Водитель), который будет наследоваться от класса Worker из предыдущей задачи.
// Этот метод должен вносить следующие private поля: водительский стаж, категория вождения (A, B, C).

class Driver extends Worker
{
    private $experience;
    private $category;


    public function setExperience($experience) {
        $this->experience = $experience;
    }

    public function setCategory($category) {
        $this->category = $category;
    }

    public function getExperience() {
        return $this->experience;
    }

    public function getCategory() {
        return $this->category;
    }
}

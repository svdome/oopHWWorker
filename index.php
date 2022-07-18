<h3>Задание № 1</h3>

<?php
require_once "Worker.php";
$user1 = new Worker;
$user1->name = 'Иван';
$user1->age = 25;
$user1->salary = 1000;

$user2 = new Worker;
$user2->name = 'Вася';
$user2->age = 26;
$user2->salary = 2000;

echo $user1->salary + $user2->salary . '<br>';
echo $user1->age + $user2->age . '<br>';
?>
<hr>
<h3>Задание № 2</h3>
<?
require_once "WorkerOne.php";
$user1 = new WorkerOne;
$user1->setName('Иван');
$user1->setAge(25);
$user1->setSalary(1000);

$user2 = new WorkerOne;
$user2->setName('Вася');
$user2->setAge(26);
$user2->setSalary(2000);

echo $user1->getSalary() + $user2->getSalary() . '<br>';
echo $user1->getAge() + $user2->getAge() . '<br>';
?>
<hr>
<h3>Задание № 3</h3>
<?

require_once "WorkerTwo.php";
$user1 = new WorkerTwo;
$user1->setName('Иван');
$user1->setAge(25);
$user1->setSalary(1000);

$user2 = new WorkerTwo;
$user2->setName('Вася');
$user2->setAge(26);
$user2->setSalary(2000);

echo $user1->getSalary() + $user2->getSalary() . '<br>';
echo $user1->getAge() + $user2->getAge() . '<br>';
?>
<hr>
<h3>Задание № 4</h3>
<?
require_once "WorkerThree.php";
$user = new WorkerThree('Дима', 25, 1000);


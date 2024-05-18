<?php
declare(strict_types=1);

require_once "University.php";
require_once "Teacher.php";

$university1 = new University("SUST","Sylhet", "ABC");
$university2 = new University ("BUET","Dhaka","DEF");

$teacher1= new Teacher("Talha",13,"CSE",$university1);
$teacher2 = new Teacher("Afnan",18,"SWE", $university2);

$teacher1->printTeacherDetails();
$teacher1->printUniversityDetails();

echo "<hr><br>";
$teacher2->printTeacherDetails();
$teacher2->printUniversityDetails();

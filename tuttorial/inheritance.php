<?php 
declare(strict_types= 1);

require_once "University.php";
require_once "teacher.php";

$university1 = new University("Boston University", "Europe", "ABC134");
$university2 = new University("Havard University", "America", "DFE456");
$teacher1 = new teacher("John" ,45, "Maths",$university2);
$teacher2 = new teacher("Jane" ,60, "PHP", $university1);

$teacher1->printTeacherDetails();
echo "<br>";
$teacher1->printUniDetails();
echo "<br>";
echo "--------------------------------------------------------------------------";
echo "<br>";
$teacher2->printTeacherDetails();
echo "<br>";
$teacher2->printUniDetails();
?>
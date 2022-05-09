<?php

require_once('section.php');
require_once('lecture.php');

$section1 = new Section('PHP OOPs', 3, '2hr');
$section2 = new Section('PHP Laravel', 2, '6hr');

$lecture1 = new Lecture('Inheritance', 8, '30min',$section1);
$lecture2 = new Lecture('Routes', 7, '45min',$section2);

$lecture1->printDetails();
echo "<br>";
$lecture1->printLecture();
echo "<br>";
echo "-------------------------------------------------------- <br>";
$lecture2->printDetails();
echo "<br>";
$lecture2->printLecture();
echo "<br>";

?>
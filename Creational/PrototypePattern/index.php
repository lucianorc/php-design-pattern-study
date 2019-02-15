<?php

require('Student.php');

$prototypeStudent = new Student();
$prototypeStudent->setName('Luciano');
$prototypeStudent->setYear('2');
$prototypeStudent->setGrade('A*');

var_dump($prototypeStudent);

$theLesserChild = clone $prototypeStudent;
$theLesserChild->setName('Dave');
$theLesserChild->setGrade('B');

var_dump($theLesserChild);

$theChildProdigy = clone $prototypeStudent;
$theChildProdigy->setName('Robin');
$theChildProdigy->setYear(3);
$theChildProdigy->setGrade('A');
$theChildProdigy->danceSkills = 'Outstanding';
$theChildProdigy->dance = function (string $style) {
    return "Dancing $style style.";
};

var_dump($theChildProdigy);
var_dump($theChildProdigy->dance->__invoke('Pogo'));
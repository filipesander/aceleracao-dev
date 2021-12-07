<?php 

$student = 'Filipe';
$noteStudent = [2, 3, 7];

$sum = array_sum($noteStudent);

$calcAvg = $sum / 3;

echo 'O aluno ' . $student . ' teve a média ' . $calcAvg;

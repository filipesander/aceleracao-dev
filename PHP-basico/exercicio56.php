<?php 

$wayFolder= 'folder-56';

if(!is_dir($wayFolder)){
  mkdir($wayFolder);
}

$directoryStudents  = mkdir("${wayFolder}/alunos");
$directoryProfessor = mkdir("${wayFolder}/professores");

$wayStudents = "./folder-56/alunos";
$wayProfessor = "./folder-56/professor";

if(file_exists($directoryStudents)){
  $myFile = fopen("{$wayFolder}/alunos/arquivo.txt", "w");
}

$student = scandir($directoryStudents);
$professor = scandir($directoryProfessor);


try {
  if (sizeof($student) <= 3) throw new Exception("O diretório alunos não possui arquivo."); 
  if (sizeof($professor) <= 3) throw new Exception("O diretório professores não possui arquivo."); 
} catch (Exception $e) {
    $log = fopen("log.txt", "w+");
    fwrite($log, "Arquivo: {$e->getFile()}, na linha {$e->getLine()}");
    fclose($log);
}


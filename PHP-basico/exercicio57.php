<?php 

function fillInName($name){
  if (empty($name)) {
    throw new Exception('Nome Inválido!');
  }
  return $name;
}

$results = [
  'name'     => [],
  'errors'    => []
];

try {
  $results['name'][] = fillInName('Filipe');
  $results['name'][] = fillInName(0);

} catch (Exception $e) {
  $results['errors'][] = $e->getMessage();

} finally {
  echo json_encode($results);
}
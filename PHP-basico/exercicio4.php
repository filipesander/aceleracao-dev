<?php 

$name = [
  1 => 'Filipe',
  2 => 'Lucas',
  3 => 'Paulo'
];

$old = [
  'a' => 27,
  'b' => 33,
  'c' => 39
];

$merge = array_merge($name, $old);

var_export($merge);
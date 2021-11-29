<?php 

$folderDirectory = 'folder-directory';

$content = file_get_contents("https://jsonplaceholder.typicode.com/photos");

$directory1 = fopen("{$folderDirectory}/arquivo1.txt", "w+");
$directory2 = fopen("{$folderDirectory}/arquivo2.txt", "w+");
$directory3 = fopen("{$folderDirectory}/arquivo3.txt", "w+");

fwrite($directory1, $content);
fwrite($directory2, $content);
fwrite($directory3, $content);

fclose($directory1);
fclose($directory2);
fclose($directory3);

unlink("{$folderDirectory}/arquivo2.txt");


try {
  if(!is_file("{$folderDirectory}/arquivo2.txt")){
    throw new Exception("Error");
  }
  fopen($directory2, "r");
}catch(Exception $e){
    echo "Error: " . $e->getMessage();
}

json_decode($directory1, true);
json_decode($directory2, true);


var_export($directory1);
var_export($directory3);
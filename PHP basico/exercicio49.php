<?php 


$path = 'folders';

if (!is_dir($path)) {
  mkdir($path);
}

for ($i = 1; $i <= 150; $i++) {
    if (!is_dir("{$path}/{$i}")) {
        echo "Diretorio criado: {$i}";
        echo '<br />';
        echo '<br />';
        mkdir("{$path}/{$i}");
    }

    if (!$i % 2 == 0){
        $date = date('d-m-Y H-i');
        $pathFile = "{$path}/{$i}/log-{$date}.txt";
        $file = fopen($pathFile, 'w+');
        fclose($file);
        echo "Arquivo criado com sucesso: {$pathFile}";
        echo '<br>';

        echo 'Size: ';
        echo filesize($pathFile);
        echo '<br>';

        echo 'Time: ';
        echo date('d/m/Y H:i', Filectime($pathFile));
        echo '<br>';

        echo 'Pathinfo: ';
        print_r(pathinfo($pathFile));
        echo '<br>';
        echo '<br>';
    }
}
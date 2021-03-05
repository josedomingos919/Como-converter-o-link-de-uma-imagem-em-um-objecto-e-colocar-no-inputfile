<?php

var_dump($_FILES);

move_uploaded_file($_FILES['jose']['tmp_name'], './teste.png');

/*
$r =[];

$i = 0;
foreach(array_keys($_FILES) as $item){
   
    $file = $_FILES[$item]; 

    $file["id"] = empty($file["name"]) ? null : date("dmyhis").$i.".".(explode('/',$file['type'])[1]); 
    $r["$item"] = $file;

    $i++;
}

var_dump($r);*/

?>
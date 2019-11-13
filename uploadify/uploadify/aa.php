<?php
    $arrInfo = $_FILES['Filedata'];
    // print_r($arrInfo);
    $temName = $arrInfo['tmp_name'];
    // print_r($temName);
    $real = $arrInfo['name'];
    $ext = explode('.',$real)[1];
    $baseName = md5(uniqid()).".$ext";
    $baseDir = "./".Date('Y/m/d',time());
    if(!is_dir($baseDir)){
        mkdir($baseDir,0,777);
    }
    $filePath = $baseDir.$baseName;
    $res = move_uploaded_file($temName,$filePath);
    echo $res;
?>
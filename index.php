<?php
    // this is for backup. These should be your own localhost credentials
    // Please change this data with the name of your server
    // and the user and password for your mysql db in your server
    // deactivate the functions that are not allowed in your server
    // and then go to chronejobs to execute this script
    /* $bklac = "C:\\xampp\\htdocs\\respaldos\\";
    // db name


    $db_name = 'mexico';
    // backup's name
    $fileName = $db_name."_".date("Ymd-His")."_BK.sql";
    // where we're going to save backup
    $location = $bklac.$fileName;

    echo "DB backup is started!".PHP_EOL; // PHP_EOL = php end of file
    $salida_sql = "C:\\xampp\\mysql\\bin\\mysqldump.exe -uroot ".$db_name." >".$location;
    exec($salida_sql); */

    $host = "localhost";
    $nombre = "mexico";
    $usuario = "root";
    $password = "";

    $fecha = date("Ymd-His");
    $nombre_sql = $nombre.'_'.$fecha.'.sql';

    $salida_sql = "C:\\xampp\\mysql\\bin\\mysqldump.exe -u$usuario ".$nombre." >".$nombre_sql;


    // You can also execute this way but it depends of php version
    // to run properly because sometimes in windows the path to
    // mysqldump is not properly indicated
    /* $dump = "mysqldump -h$host -u $usuario -p$password $nombre > $nombre_sql"; */

    exec($salida_sql);
    
    // create a zip
    /* $zip = new ZipArchive();
    $nombre_zip = $fileName.'.zip';

    if($zip->open($nombre_zip, ZipArchive::CREATE) == true){
        $zip->addFile($fileName);
        $zip->close();
        unlink($fileName);
        header("Location: $nombre_zip");
    } */
?>
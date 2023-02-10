<?php

    $nombre = $_POST["nombre"];
    $apellidos = $_POST["apellidos"];
    $edad = $_POST["edad"];
    $carrera =_post["Carrera"];
    $array = array("nombre" => $nombre, "apellidos" => $apellidos, "edad" => $edad  "carrera" => $carrera   );
 =>
    if(file_exists("Biografias.json")){
        $contenido = file_get_contents("Briografias.json");
        $data = json_decode($contenido);
        array_push($data, $array);
        file_put_contents("Biografias.json", json_encode($data));
    }else{
        $data = array();
        array_push($data, $array);
        $f = fopen("Briografias.json", "w");
        fwrite($f, json_encode($data));
        fclose($f);
    }

    header("Location: index.php");


?>







<?php

if(!empty($_GET['id'])){
    //Credenciales de conexion
    $Host = 'localhost';
    $Username = 'diego';
    $Password = '300799Diego';
    $dbName = 'final';
    
    //Crear conexion mysql
    $db = new mysqli($Host, $Username, $Password, $dbName);
    
    //revisar conexion
    if($db->connect_error){
       die("Connection failed: " . $db->connect_error);
    }
    
    //Extraer imagen de la BD mediante GET
    $id = $_GET["id"];

    $result = $db->query("SELECT Imagen FROM Articulo WHERE Id_Articulo = $id");
    $db->close();
    if($result->num_rows > 0){
        $imgDatos = $result->fetch_assoc();
        
        //Mostrar Imagen
        header("Content-type: image/jpg"); 
        echo $imgDatos['Imagen']; 
    }else{
        echo 'Imagen no existe...';
    }
}
?>
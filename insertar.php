<?php
    include("conexion.php");
    $con=conectar();

    $cod_estudiante= $_POST['cod_estudiante'];
    $dni= $_POST['dni'];
    $nombres= $_POST['nombres'];
    $_apellidos= $_POST['apellidos'];

    $sql= "INSERT INTO alumno VALUES('$cod_estudiante','$dni','$nombres','$_apellidos')";
   
    
    $query = mysqli_query($con, $sql);

    if($query){
        Header("Location: alumno.php");
    }else{

    }

?>
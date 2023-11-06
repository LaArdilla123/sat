<?php
    include ("conexion.php");
    if(isset($_POST['rfc'])){
        $rfc = $_POST['rfc'];
    }
    if(isset($_POST['periodo'])){
        $periodo = $_POST['periodo'];
    }
    if(isset($_POST['fecha'])){
        $fecha = $_POST['fecha'];
    }
    if(isset($_POST['phone'])){
        $phone = $_POST['phone'];
    }
    if(isset($_POST['color'])){
        $color = $_POST['color'];
    }
    if(isset($_POST['pais'])){
        $pais = $_POST['pais'];
    }

$consulta = "INSERT INTO FORMULARIO(rfc, periodo, fecha, phone, color, pais) VALUES ('$rfc', '$periodo', '$fecha', '$phone', '$color', '$pais')";
    
    if ($conexion->query($consulta) === TRUE){
        header('https://shiranaisaito.000webhostapp.com/Adaptativo/GRID-RESPONSIVE-NEWJEANS/index(1).html');
        exit;
    }else{
        echo "error:" . $consulta . "<br>" . $conexion->error;
    }

    $conexion->close();
?>
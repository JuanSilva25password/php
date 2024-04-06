<?php
include('./config/conexion.php');

$conexion = new Conexion();
$conn = $conexion->conectar();
$sql = "SELECT * FROM producto";
$query = mysqli_query($conn, $sql);
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Tabla Productos</title>
    <link href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css" rel="stylesheet">
    <link rel="stylesheet" href="./css/styles.css">
    <style>
        /* Estilos para cambiar el color de la tabla */
        .table-custom {
            background-color: #800080; /* Cambia el color de fondo */
        }

        .table-custom th,
        .table-custom td {
            border-color: #dee2e6; /* Cambia el color de borde */
            color: #ffffff;
        }

        .table-custom th {
            background-color: #800080; /* Cambia el color de fondo de las celdas del encabezado */
            color: #ffffff; /* Cambia el color del texto del encabezado */
        }
    </style>
</head>
<body>

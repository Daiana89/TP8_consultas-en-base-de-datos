<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>tp8_backend.php</title>
</head>
<body>
    <h1>Tienda de ropa</h1>
    <button type="submit"><a href="index.html">Inicio</a></button>
    <button type="submit"><a href="listar.php">Listar ropa</a></button>
    <button type="submit"><a href="agregar.html">Agregar ropa</a></button>
    <h2>Lista de ropa</h2>
    <p>La siguiente lista muestra los datos de la ropa actualmente en stock.</p>
    <table border="1">
    <tr>
        <th>TIPO DE PRENDA</th>
        <th>MARCA</th>
        <th>TALLE</th>
        <th>PRECIO</th>
    </tr>
    <?php
    // 1) Conexion
    $conexion = mysqli_connect("127.0.0.1","root","");


    // ) Almacenamos los datos del envío POST
    // No se utiliza este paso en este caso puntual

    // 2) Preparar la orden SQL
    // Sintaxis SQL SELECT
    // SELECT * FROM nombre_tabla
    // => Selecciona todos los campos de la siguiente tabla
    // SELECT campos_tabla FROM nombre_tabla
    // => Selecciona los siguientes campos de la siguiente tabla
    // -------------PUNTO A-------------------------------
    $consulta ="SELECT*FROM ropa";
    //-------------PUNTO B-------------------------------
    //$consulta ="SELECT*FROM ropa WHERE tipo de prenda = 'buzo'";
    //-------------PUNTO C-------------------------------
    //$consulta ="SELECT*FROM ropa WHERE marca = 'nike'";
    //-------------PUNTO D-------------------------------
    //$consulta ="SELECT*FROM ropa WHERE precio >= '500'";
    // 3) Ejecutar la orden y obtenemos los registros
    mysqli_select_db($conexion,"tp7_backend.php");
    $datos= mysqli_query($conexion, $consulta);

    // 4) Mostrar los datos del registro
    while ( $reg=mysqli_fetch_array($datos)) { ?>
        <tr>
        <td><?php echo $reg['tipo de prenda']; ?></td>
        <td><?php echo $reg['marca']; ?></td>
        <td><?php echo $reg['talle']; ?></td>
        <td><?php echo $reg['precio']; ?></td>
        </tr>
    <?php } ?>
    </table>
</body>
</html>

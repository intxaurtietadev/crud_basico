<?php
include('connection.php');
$con = connection();

$sql ="SELECT * FROM clientes";
$query = mysqli_query($con, $sql);
?>


<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Usuarios Crud</title>
</head>
<body>
    <div>
        <form action="insert_user.php" method="POST">
            <h1>Crear cliente</h1>

            <input type="text" name="nombre" placeholder="Nombre">
            <input type="text" name="apellidos" placeholder="Apellidos">
            <input type="text" name="direccion" placeholder="Dirección">
            <input type="text" name="poblacion" placeholder="Población">
            <input type="text" name="codigopostal" placeholder="Codigo Postal">
            <input type="text" name="telefono" placeholder="Teléfono">
            <input type="text" name="email" placeholder="Email">

            <input type="submit" value="Agregar cliente">
        </form>
    </div>

    <div>
        <h2>Clientes registrados
        </h2>
        <table>
            <thead>
<tr>
    <th>ID</th>
    <th>Nombre</th>
    <th>Apellidos</th>
    <th>Dirección</th>
    <th>Población</th>
    <th>Código Postal</th>
    <th>Teléfono</th>
    <th>Email</th>
    <th></th>
    <th></th>
</tr>
            </thead>
            <tbody>
                <?php while ($row = mysqli_fetch_array($query)): ?>
                <tr>
              <th><?= $row ['id_cliente']?></th>
              <th><?= $row ['nombre']?></th>
              <th><?= $row ['apellidos']?></th>
              <th><?= $row ['direccion']?></th>
              <th><?= $row ['poblacion']?></th>
              <th><?= $row ['codigopostal']?></th>
              <th><?= $row ['telefono']?></th>
              <th><?= $row ['email']?></th>  


              </tr>
              <?php endwhile; ?>
            </tbody>
        </table>
    </div>

</body>
</html>
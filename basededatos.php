<!DOCTYPE html>
<html>
<head>
    <title>Base de Datos</title>
    <meta charset="utf-8">
    <link rel="stylesheet" type="text/css" href="estilo.css">
    <style>
        table {
            width: 100%;
            border-collapse: collapse;
        }
        th, td {
            padding: 8px;
            text-align: left;
            border-bottom: 1px solid #ddd;
        }
        tr:hover {
            background-color: #f5f5f5;
        }
        input[type="text"] {
            width: calc(100% - 100px); /* Reducimos un poco el ancho para dar espacio al botón */
            padding: 5px;
            box-sizing: border-box;
        }
        input[type="text"].detalles_operador {
            width: calc(100% - 16px); /* Ancho ajustado para que sea igual al campo de Descripción de la falla */
            padding: 5px;
            box-sizing: border-box;
        }
        input[type="submit"] {
            padding: 5px 10px;
            margin-left: 5px;
            cursor: pointer;
        }
    </style>
</head>
<body>
    <h1>Base de Datos</h1>
    <?php
    // Configuración de la conexión a la base de datos
    $servidor = "localhost";
    $usuario = "root";
    $contraseña = "";
    $base_de_datos = "base_soplado";

    // Establecer la conexión
    $conexion = mysqli_connect($servidor, $usuario, $contraseña, $base_de_datos);

    // Verificar la conexión
    if (!$conexion) {
        die("Error al conectar con la base de datos: " . mysqli_connect_error());
    }

    // Verificar si se ha enviado el formulario de edición
    if (isset($_POST['confirmar'])) {
        $id = $_POST['id'];
        $detalles_operador = $_POST['detalles_operador'];

        // Consulta para actualizar los detalles del operador
        $consulta_actualizar = "UPDATE soplado SET `Detalles del operador`='$detalles_operador' WHERE ID='$id'";
        $resultado_actualizar = mysqli_query($conexion, $consulta_actualizar);

        if ($resultado_actualizar) {
            echo "<p>Detalles del operador actualizados correctamente.</p>";
        } else {
            echo "Error al actualizar los detalles del operador: " . mysqli_error($conexion);
        }
    }

    // Realizar la consulta
    $consulta = "SELECT * FROM soplado";
    $resultado = mysqli_query($conexion, $consulta);

    if ($resultado) {
        if (mysqli_num_rows($resultado) > 0) {
            // Mostrar los datos en una tabla
            echo "<table>";
            echo "<tr><th>ID</th><th>Tipo de mantenimiento</th><th>Detectado por</th><th>Código empleado</th><th>Descripción de la falla</th><th>Prioridad</th><th>Tipo de trabajo</th><th>Fecha de creación</th><th>Detalles del operador</th></tr>";
            while ($fila = mysqli_fetch_assoc($resultado)) {
                echo "<tr>";
                echo "<td>" . $fila['ID'] . "</td>";
                echo "<td>" . $fila['Tipo de mantenimiento'] . "</td>";
                echo "<td>" . $fila['Detectado por'] . "</td>";
                echo "<td>" . $fila['Código empleado'] . "</td>";
                echo "<td>" . $fila['Descripción de la falla'] . "</td>";
                echo "<td>" . $fila['Prioridad'] . "</td>";
                echo "<td>" . $fila['Tipo de trabajo'] . "</td>";
                echo "<td>" . $fila['Fecha de creación'] . "</td>";
                echo "<td>";
                echo "<form method='post'>";
                echo "<input type='hidden' name='id' value='" . $fila['ID'] . "'>";
                echo "<input type='text' name='detalles_operador' value='" . $fila['Detalles del operador'] . "' class='detalles_operador'>";
                echo "<input type='submit' name='confirmar' value='Confirmar'>";
                echo "</form>";
                echo "</td>";
                echo "</tr>";
            }
            echo "</table>";
        } else {
            echo "No se encontraron datos en la base de datos.";
        }
    } else {
        echo "Error al ejecutar la consulta: " . mysqli_error($conexion);
    }

    // Cerrar la conexión
    mysqli_close($conexion);
    ?>
</body>
</html>
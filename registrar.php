<?php 
include("conexion2.php");

if (isset($_POST['register'])) {
    // Verificamos que los campos no estén vacíos
    if (!empty($_POST['detectado_por']) && !empty($_POST['codigo_empleado']) && !empty($_POST['descripcion_falla']) && !empty($_POST['prioridad']) && !empty($_POST['tipo_trabajo']) && !empty($_POST['tipo_mantenimiento'])) {
        // Obtenemos los valores de los campos del formulario
        $detectado_por = trim($_POST['detectado_por']);
        $codigo_empleado = trim($_POST['codigo_empleado']);
        $descripcion_falla = trim($_POST['descripcion_falla']);
        $prioridad = $_POST['prioridad']; // No necesitamos trim() para los valores de un select
        $tipo_trabajo = $_POST['tipo_trabajo']; // No necesitamos trim() para los valores de un select
        $tipo_mantenimiento = $_POST['tipo_mantenimiento']; // No necesitamos trim() para los valores de un select
        $fechareg = date("Y-m-d"); // Cambié el formato de fecha para que sea compatible con la base de datos

        // Preparamos la consulta SQL para insertar los datos en la tabla
        $consulta = "INSERT INTO soplado(`Detectado por`, `Código empleado`, `Descripción de la falla`, `Prioridad`, `Tipo de trabajo`, `Tipo de mantenimiento`, `Fecha de creación`) VALUES ('$detectado_por', '$codigo_empleado', '$descripcion_falla', '$prioridad', '$tipo_trabajo', '$tipo_mantenimiento', '$fechareg')";
        
        // Ejecutamos la consulta
        $resultado = mysqli_query($conex, $consulta);

        // Verificamos si la consulta fue exitosa
        if ($resultado) {
            ?> 
            <h3 class="ok">¡Te has inscripto correctamente!</h3>
           <?php
        } else {
            ?> 
            <h3 class="bad">¡Ups ha ocurrido un error!</h3>
           <?php
        }
    } else {
        ?> 
        <h3 class="bad">¡Por favor complete todos los campos!</h3>
       <?php
    }
}
?>

<!DOCTYPE html>
<html>
<head>
    <title>Formulario</title>
    <meta charset="utf-8">
    <link rel="stylesheet" type="text/css" href="estilo.css">
    <style>
        body {
            font-family: Arial, sans-serif;
            background-color: #f7f7f7;
            margin: 0;
            padding: 0;
        }
        .container {
            max-width: 600px;
            margin: 50px auto;
            background-color: #fff;
            padding: 20px;
            border-radius: 10px;
            box-shadow: 0 0 10px rgba(0,0,0,0.1);
        }
        h1 {
            text-align: center;
            color: #333;
        }
        form {
            margin-top: 20px;
        }
        input[type="text"],
        input[type="email"] {
            width: 100%;
            padding: 10px;
            margin-bottom: 15px;
            border: 1px solid #ccc;
            border-radius: 5px;
            box-sizing: border-box;
        }
        select {
            width: 100%;
            padding: 10px;
            margin-bottom: 15px;
            border: 1px solid #ccc;
            border-radius: 5px;
            box-sizing: border-box;
        }
        input[type="submit"] {
            width: 100%;
            background-color: #4caf50;
            color: #fff;
            padding: 10px;
            border: none;
            border-radius: 5px;
            cursor: pointer;
            font-size: 16px;
            transition: background-color 0.3s;
        }
        input[type="submit"]:hover {
            background-color: #45a049;
        }
    </style>
</head>
<body>
    <div class="container">
        <h1>Formulario</h1>
        <form method="post" action="registrar.php">
            <input type="text" name="detectado_por" placeholder="Detectado por" required>
            <input type="text" name="codigo_empleado" placeholder="Código empleado" required>
            <input type="text" name="descripcion_falla" placeholder="Descripción de la falla" required>
            
            <select name="prioridad" required>
                <option value="" disabled selected>Prioridad</option>
                <option value="alta">Alta</option>
                <option value="media">Media</option>
                <option value="baja">Baja</option>
            </select>
            
            <select name="tipo_trabajo" required>
                <option value="" disabled selected>Tipo de trabajo</option>
                <option value="mecanico">Mecánico</option>
                <option value="electrico">Eléctrico</option>
                <option value="otro">Otro</option>
            </select>

            <select name="tipo_mantenimiento" required>
                <option value="" disabled selected>Tipo de mantenimiento</option>
                <option value="mantenimiento_tecnico">Mantenimiento Técnico</option>
                <option value="mantenimiento_autonomo">Mantenimiento Autónomo</option>
                <option value="seguridad">Seguridad</option>
                <option value="inspeccion_tecnica">Inspección Técnica</option>
            </select>
            
            <input type="submit" name="register" value="Registrar">
        </form>
    </div>
</body>
</html>

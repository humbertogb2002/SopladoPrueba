<!DOCTYPE html>
<html>
<head>
    <title>Gestión de Formularios</title>
    <meta charset="utf-8">
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
        button {
            display: block;
            width: 200px;
            margin: 0 auto 20px;
            padding: 10px;
            font-size: 16px;
            background-color: #4CAF50;
            color: white;
            border: none;
            border-radius: 5px;
            cursor: pointer;
            transition: background-color 0.3s;
        }
        button:hover {
            background-color: #45a049;
        }
    </style>
</head>
<body>
    <div class="container">
        <h1>Gestión de Formularios</h1>
        <button onclick="verificarContrasena('formulario')">Llenar Formulario</button>
        <button onclick="verificarContrasena('basededatos')">Editar Formulario</button>
    </div>

    <script>
        function verificarContrasena(pagina) {
            var contrasena;
            // Definir las contraseñas para cada página
            if (pagina === 'formulario') {
                contrasena = prompt("Verificar contraseña");
            } else if (pagina === 'basededatos') {
                contrasena = prompt("Verificar contraseña");
            }
            // Verificar la contraseña ingresada
            if (pagina === 'formulario' && contrasena === "1234") {
                window.location.href = "formulario.php";
            } else if (pagina === 'basededatos' && contrasena === "5678") {
                window.location.href = "basededatos.php";
            } else {
                alert("Contraseña incorrecta. Inténtelo de nuevo.");
            }
        }
    </script>
</body>
</html>


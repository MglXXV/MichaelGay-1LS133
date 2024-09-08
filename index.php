<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Sistema de Gestión de Automóviles</title>
    <style>
        html, body {
            height: 100%;
            margin: 0;
        }
        body {
            font-family: Arial, sans-serif;
            background-color: #f0f0f0;
            display: flex;
            flex-direction: column;
            justify-content: space-between;
            align-items: center;
        }
        .container {
            background-color: #fff;
            padding: 40px;
            border-radius: 10px;
            box-shadow: 0 0 15px rgba(0, 0, 0, 0.1);
            text-align: center;
            width: 100%;
            max-width: 400px;
            margin-top: 20px;
        }
        h1 {
            color: #333;
            margin-bottom: 30px;
        }
        nav a {
            display: block;
            background-color: green;
            color: white;
            padding: 14px;
            margin: 10px 0;
            text-align: center;
            text-decoration: none;
            border-radius: 5px;
            transition: background-color 0.3s;
        }
        nav a:hover {
            background-color: #45a049;
        }
        footer {
            background-color: #fff;
            color: #333;
            padding: 10px;
            text-align: center;
            border-top: 1px solid #ddd;
            width: 100%;
        }
    </style>
</head>
<body>
    <div class="container">
        <h1>Bienvenido al Sistema de Gestión de Automóviles</h1>
        <p>Seleccione una opción:</p>
        <nav>
            <a href="paginas/registro_automovil.php">Registrar un nuevo automóvil</a>
            <a href="paginas/busqueda_automovil.php">Búsqueda de automóvil</a>
        </nav>
    </div>
    <footer>
        <p>&copy; Michael Gay 8-996-1689 Grupo: 1LS133</p>
    </footer>
</body>
</html>

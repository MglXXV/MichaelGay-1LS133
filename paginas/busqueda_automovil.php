<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Búsqueda</title>
    <style>
        html, body {
            height: 100%;
            margin: 0;
            font-family: Arial, sans-serif;
            background-color: #f0f0f0;
        }
        body {
            display: flex;
            flex-direction: column;
            min-height: 100vh;
            margin: 0;
        }
        .main {
            flex: 1;
            display: flex;
            justify-content: center;
            align-items: center;
            padding: 20px;
        }
        .container {
            background-color: #fff;
            padding: 40px;
            border-radius: 10px;
            box-shadow: 0 0 15px rgba(0, 0, 0, 0.1);
            text-align: center;
            width: 100%;
            max-width: 400px;
        }
        h2 {
            color: #333;
            margin-bottom: 20px;
        }
        label {
            display: block;
            text-align: left;
            margin: 10px 0 5px;
            color: #333;
        }
        input[type="text"] {
            width: 100%;
            padding: 10px;
            margin-bottom: 15px;
            border: 1px solid #ccc;
            border-radius: 5px;
            box-sizing: border-box;
        }
        input[type="submit"] {
            background-color: blue;
            color: white;
            padding: 14px 20px;
            border: none;
            border-radius: 5px;
            cursor: pointer;
            width: 100%;
            transition: background-color 0.3s;
        }
        input[type="submit"]:hover {
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
    <div class="main">
        <div class="container">
            <h2>Buscar Automóvil</h2>
            <form action="../logic/procesar_busqueda.php" method="post">
                <label for="placa">Ingrese placa del vehículo:</label>
                <input type="text" id="placa" name="placa" required>

                <input type="submit" value="Buscar">
            </form>
        </div>
    </div>
    <footer>
        <p>&copy; Michael Gay 8-996-1689 Grupo: 1LS133</p>
    </footer>
</body>
</html>

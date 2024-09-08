<?php

	include "../class/automovil.php";
	include "../database/database.php";


	#creacion del constructor automovil

	$automovil = new Automovil();


	#recibir los valores del formulario y seteralos en los metodos SET

	

	$automovil->setPlaca($_POST["placa"]);

	try {

		$pdo = (new Database())->obtenerConexion();

		

		$consulta_sql = "SELECT * FROM " . "automovil". " WHERE placa = :placa";

		$statement = $pdo->prepare($consulta_sql);

		$statement->bindParam(':placa', $automovil->getPlaca());

		$statement->execute();
    
        // Obtener los resultados
        $results = $statement->fetchAll(PDO::FETCH_ASSOC);
    
        // Verificar si hay resultados
        if (count($results) > 0) {
            // Estilo en línea para la tabla, aplicando el diseño anterior
            echo '<style>
                    body {
                        font-family: Arial, sans-serif;
                        background-color: #f0f0f0;
                        display: flex;
                        justify-content: center;
                        align-items: center;
                        height: 100vh;
                    }
                    .container {
                        background-color: #fff;
                        padding: 40px;
                        border-radius: 10px;
                        box-shadow: 0 0 15px rgba(0, 0, 0, 0.1);
                        width: 100%;
                        max-width: 600px;
                    }
                    table {
                        width: 100%;
                        border-collapse: collapse;
                        margin-bottom: 20px;
                    }
                    table, th, td {
                        border: 1px solid #ddd;
                    }
                    th, td {
                        padding: 12px;
                        text-align: left;
                    }
                    th {
                        background-color: blue;
                        color: white;
                    }
                    td {
                        background-color: #f9f9f9;
                    }
                  </style>';
    
            // Contenedor para la tabla
            echo '<div class="container">';
            echo '<h2>Resultado de la Búsqueda</h2>';
    
            // Crear la tabla
            echo '<table>';
            echo '<tr><th>Placa</th><th>Marca</th><th>Modelo</th><th>Anio</th><th>Color</th><th>Numero del Motor</th><th>Numero del Chasis</th><th>Tipo de Vehiculo</th></tr>';
    
            // Mostrar los resultados en la tabla
            foreach ($results as $row) {
                echo '<tr>';
                echo '<td>' . htmlspecialchars($row['placa']) . '</td>';
                echo '<td>' . htmlspecialchars($row['marca']) . '</td>';
                echo '<td>' . htmlspecialchars($row['modelo']) . '</td>';
                echo '<td>' . htmlspecialchars($row['anio']) . '</td>';
                echo '<td>' . htmlspecialchars($row['color']) . '</td>';
                echo '<td>' . htmlspecialchars($row['numero_motor']) . '</td>';
                echo '<td>' . htmlspecialchars($row['numero_chasis']) . '</td>';
                echo '<td>' . htmlspecialchars($row['tipo_vehiculo']) . '</td>';
                echo '</tr>';
            }
    
            echo '</table>';
            echo '</div>';
        } 

        else {
            echo '<div class="container">';
            echo '<h2>No se encontraron resultados para la placa ingresada.</h2>';
            echo '</div>';
        }
    }

	catch(PDOException $exception) {
		echo "Error de Conexion:" . $exception->getMessage();
	}

?>
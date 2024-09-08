<?php

	include "../class/automovil.php";
	include "../database/database.php";


	#creacion del constructor automovil

	$automovil = new Automovil();


	#recibir los valores del formulario y seteralos en los metodos SET

	

	$automovil->setPlaca($_POST["placa"]);
	$automovil->setMarca($_POST["marca"]);
	$automovil->setModelo($_POST["modelo"]);
	$automovil->setAnio($_POST["anio"]);
	$automovil->setColor($_POST["color"]);
	$automovil->setNumeroMotor($_POST["numero_motor"]);
	$automovil->setNumeroChasis($_POST["numero_chasis"]);
	$automovil->setTipoVehiculo($_POST["tipo_vehiculo"]);


	try {

		$pdo = (new Database())->obtenerConexion();

		

		$consulta_sql = "INSERT INTO " . "automovil (placa, marca, modelo, anio, color, numero_motor, numero_chasis, tipo_vehiculo)"  . "VALUES (:placa,
			:marca,:modelo,:anio,:color,:numero_motor,:numero_chasis,:tipo_vehiculo)";

		$statement = $pdo->prepare($consulta_sql);

		$statement->bindParam(':placa', $automovil->getPlaca());
	    $statement->bindParam(':marca', $automovil->getMarca());
	    $statement->bindParam(':modelo',$automovil->getModelo());
	    $statement->bindParam(':anio', 	$automovil->getAnio());
	    $statement->bindParam(':color', $automovil->getColor());
	    $statement->bindParam(':numero_motor', $automovil->getNumeroMotor());
	    $statement->bindParam(':numero_chasis', $automovil->getNumeroChasis());
	    $statement->bindParam(':tipo_vehiculo', $automovil->getTipoVehiculo());

	          echo '<!DOCTYPE html>
	              <html lang="es">
	              <head>
	                  <meta charset="UTF-8">
	                  <meta name="viewport" content="width=device-width, initial-scale=1.0">
	                  <meta http-equiv="refresh" content="5;url=../index.php">
	                  <title>Registro de Automóvil - Respuesta</title>
	                  <style>
	                      body {
	                          font-family: Arial, sans-serif;
	                          background-color: #f0f0f0;
	                          margin: 0;
	                          padding: 0;
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
	                          max-width: 400px;
	                          text-align: center;
	                      }
	                      .success {
	                          border: 2px solid #4CAF50;
	                          color: #4CAF50;
	                      }
	                      .error {
	                          border: 2px solid #f44336;
	                          color: #f44336;
	                      }
	                      h2 {
	                          margin-bottom: 20px;
	                      }
	                      p {
	                          font-size: 16px;
	                      }
	                  </style>
	              </head>
	              <body>';


	    
	        // Ejecutar la declaración
	        if ($statement->execute()) {
	            // Si se ejecuta correctamente, mostrar mensaje de éxito
	            echo '<div class="container success">';
	            echo '<h2>Registro Exitoso</h2>';
	            echo '<p>El automóvil ha sido registrado correctamente.</p>';
	            echo '</div>';
	        } else {
	            // Si falla, mostrar mensaje de error
	            echo '<div class="container error">';
	            echo '<h2>Error en el Registro</h2>';
	            echo '<p>Hubo un problema al registrar el automóvil. Inténtelo nuevamente.</p>';
	            echo '</div>';
	        }
	    
	        echo '</body></html>'; 

	} 

	catch(PDOException $exception) {
		echo "Error de Conexion:" . $exception->getMessage();
	}

?>
CREATE DATABASE registro_automoviles;

use registro_automoviles;

CREATE TABLE automovil (
    id INT AUTO_INCREMENT PRIMARY KEY,
    placa VARCHAR(6) NOT NULL UNIQUE,
    marca VARCHAR(50) NOT NULL,
    modelo VARCHAR(50) NOT NULL,
    anio INT NOT NULL, 
    color VARCHAR(30) NOT NULL
    numero_motor VARCHAR(20) NOT NULL,
    numero_chasis VARCHAR(17) NOT NULL,
    tipo_vehiculo VARCHAR(30) NOT NULL
);

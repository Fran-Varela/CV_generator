CREATE DATABASE cv_generator;
USE cv_generator;

CREATE TABLE cvs (
    id INT AUTO_INCREMENT PRIMARY KEY,
    nombre VARCHAR(100),
    email VARCHAR(100),
    telefono VARCHAR(20),
    perfil TEXT,
    experiencia TEXT,
    formacion TEXT,
    habilidades TEXT,
    idiomas TEXT,
    foto VARCHAR(255),
    fecha_creacion DATETIME
);

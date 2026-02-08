# Generador de Currículum Vitae con PHP y MySQL

Proyecto realizado para la asignatura **Desarrollo Web en Entorno Servidor** del ciclo formativo **Desarrollo de Aplicaciones Web (2º DAW)**.

---

## Descripción
Aplicación web desarrollada en PHP que permite crear y gestionar currículums vitae mediante un formulario web.
Los datos se almacenan en una base de datos MySQL, permitiendo mantener un historial de versiones del CV.

Cada vez que se crea o edita un CV, se guarda como una nueva versión, sin sobrescribir las anteriores.

---

## Funcionalidades
- Crear un CV mediante formulario web
- Subir una foto de perfil (opcional)
- Guardar los datos del CV en MySQL
- Mantener un historial de versiones
- Listar todas las versiones guardadas
- Visualizar el CV en una plantilla profesional
- Editar un CV creando una nueva versión
- Eliminar versiones de CV
- Diseño con Bootstrap y CSS
- Preparado para impresión o guardado como PDF

---

## Tecnologías utilizadas
- PHP
- MySQL
- HTML
- CSS
- Bootstrap 5 (mediante CDN)
- WAMP Server
- phpMyAdmin

---

## Estructura del proyecto
cv_generator/
├── css/
│ └── style.css
├── db/
│ └── cv.sql
├── uploads\fotos/
│ └── (fotos de los CV)
├── config.php
├── guardar.php
├── eliminar.php
├── index.php
├── listar.php
├── ver.php
├── editar.php
└── README.md

---

## Base de datos
La aplicación utiliza una base de datos MySQL con una tabla llamada `cvs` que almacena todas las versiones del currículum, incluyendo la ruta de la foto de perfil.

### Script SQL
```sql
CREATE DATABASE cv_generator;
USE cv_generator;

CREATE TABLE cvs (
    id INT AUTO_INCREMENT PRIMARY KEY,
    nombre VARCHAR(100),
    email VARCHAR(100),
    telefono VARCHAR(50),
    perfil TEXT,
    experiencia TEXT,
    formacion TEXT,
    habilidades TEXT,
    idiomas TEXT,
    foto VARCHAR(255),
    fecha_creacion TIMESTAMP DEFAULT CURRENT_TIMESTAMP
);

## Instalación

1- Instalar WAMP Server

2- Copiar la carpeta cv_generator dentro de la carpeta www

3- Iniciar WAMP y acceder a phpMyAdmin

4- Crear la base de datos e importar el script SQL

5- Configurar la conexión en el archivo config.php

Acceder desde el navegador:

http://localhost/cv_generator

## Impresión

El CV puede imprimirse o guardarse como PDF directamente desde el navegador.
Durante la impresión se ocultan botones y enlaces para obtener un formato limpio y profesional.

## Autor:

Francisco Varela Díaz
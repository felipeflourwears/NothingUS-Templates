DROP DATABASE IF EXISTS itic;
CREATE DATABASE itic;
USE itic;

CREATE TABLE alumnos (
	id_alumno int AUTO_INCREMENT,
	nombre varchar(45),
	carrera varchar(45),
	grupo varchar(45),
	PRIMARY KEY (id_alumno)
);

INSERT INTO alumnos VALUES
(100,'LF','IRS', '2'),
(200,'LD','IRS', '3'),
(300,'Efren','ITC', '3'),
(400,'Vero','ITC', '2');
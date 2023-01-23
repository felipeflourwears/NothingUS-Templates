DROP DATABASE IF EXISTS db_ajax;
CREATE DATABASE db_ajax;
USE db_ajax;

CREATE TABLE usuarios (
	id_users int AUTO_INCREMENT,
	nombre_users varchar(45),
	apellido_users varchar(45),
	PRIMARY KEY (id_users)
);

INSERT INTO usuarios VALUES
(100,'LF','IRS'),
(200,'LD','IRS'),
(300,'Efren','ITC'),
(400,'Vero','ITC');
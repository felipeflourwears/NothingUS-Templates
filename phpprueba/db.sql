DROP DATABASE IF EXISTS pruebadb;
CREATE DATABASE pruebadb;
USE pruebadb;

CREATE TABLE talumno(
    id int AUTO_INCREMENT,
    nom varchar(30) NOT NULL,
    ape varchar(45) NOT NULL,
    PRIMARY KEY(id)
);

INSERT INTO talumno(nom, ape) VALUES
("Sofia", "Santander"),
("Sebastian", "Funes");


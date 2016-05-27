CREATE DATABASE jd1_disenoweb;
USE jd1_disenoweb;

CREATE TABLE usuarios (
	id INT NOT NULL AUTO_INCREMENT,
    nombre VARCHAR(25) NOT NULL,
	email VARCHAR(255) NOT NULL,
	password VARCHAR(40) NOT NULL,
	fecha_registro DATETIME NOT NULL,
    activo TINYINT NOT NULL,
	PRIMARY KEY(id)
)

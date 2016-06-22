CREATE DATABASE jd1_disenoweb;
USE jd1_disenoweb;

CREATE TABLE usuarios (
	id INT NOT NULL AUTO_INCREMENT UNIQUE,
    	nombre VARCHAR(25) NOT NULL UNIQUE,
	email VARCHAR(255) NOT NULL UNIQUE,
	password VARCHAR(255) NOT NULL,
	fecha_registro DATETIME NOT NULL,
  	  activo TINYINT NOT NULL,
	PRIMARY KEY(id)
)


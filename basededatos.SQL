CREATE TABLE Usuario(
Id_Usuario int NOT NULL AUTO_INCREMENT,
Nombre varchar(25) NOT NULL,
Contrasena varchar(25) NOT NULL,
Correo varchar(255) NOT NULL,
PRIMARY KEY (Id_Usuario)
);

CREATE TABLE Articulo(
Id_Articulo int NOT NULL AUTO_INCREMENT,
Nombre varchar(255) NOT NULL,
Descripcion MEDIUMTEXT NOT NULL,
Imagen LONGBLOB NOT NULL,
Id_Usuario int NOT NULL,
PRIMARY KEY (Id_Articulo),
CONSTRAINT fk_usuario FOREIGN KEY (Id_Usuario) REFERENCES Usuario (Id_Usuario)
);

CREATE TABLE Comentario(
Id_Comentario int NOT NULL AUTO_INCREMENT,
Id_Usuario int NOT NULL,
Id_Articulo int NOT NULL,
Comentario varchar(255),
PRIMARY KEY (Id_Comentario),
CONSTRAINT fk_usuario_c FOREIGN KEY (Id_Usuario) REFERENCES Usuario (Id_Usuario),
CONSTRAINT fk_articulo_c FOREIGN KEY (Id_Articulo) REFERENCES Articulo (Id_Articulo)
);

INSERT INTO Usuario (Nombre, Contrasena, Correo) VALUES("admin", "12345", "admin@gmail.com");
CREATE TABLE usuario(
    id int primary key auto_increment,
    username varchar(50) unique,
    complete_name varchar(50),
    password varchar(255)
);

CREATE TABLE publicaciones (
  id int primary key auto_increment,
  autor varchar(50),
  cuerpo text,
  fecha_hora timestamp
)


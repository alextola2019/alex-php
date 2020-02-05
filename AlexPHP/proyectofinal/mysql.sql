create database proyecto;
use proyecto;

CREATE TABLE 'contar' (
  num int(11) NOT NULL DEFAULT 0
);
INSERT INTO contar (num) VALUES
(0);

CREATE TABLE imagen (
  id int(255) NOT NULL,
  imagen varchar(50) NOT NULL,
  rotar int(3) NOT NULL DEFAULT 0,
  brillo int(3) NOT NULL DEFAULT 0,
  red int(4) NOT NULL DEFAULT 0,
  green int(4) NOT NULL DEFAULT 0,
  blue int(4) NOT NULL DEFAULT 0,
  contraste int(4) NOT NULL DEFAULT 0,
  ancho int(11) UNSIGNED NOT NULL DEFAULT 0,
  altura int(11) UNSIGNED NOT NULL DEFAULT 0,
  x int(11) UNSIGNED NOT NULL DEFAULT 0,
  y int(11) UNSIGNED NOT NULL DEFAULT 0,
  gamma int(11) NOT NULL DEFAULT 0,
  size1 int(11) NOT NULL DEFAULT 640,
  size2 int(11) NOT NULL DEFAULT 480,
  gris int(11) NOT NULL DEFAULT 0
);

INSERT INTO imagen (id, imagen, rotar, brillo, red, green, blue, contraste, ancho, altura, x, y, gamma, size1, size2, gris) VALUES
(10, 'montaÃ±a2.jpg', 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 640, 480, 0),
(13, 'montaÃ±a2.jpg', 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 640, 480, 0);

CREATE TABLE login 
( user varchar(30) NOT NULL,
  password varchar(200) NOT NULL);


INSERT INTO login (user, password) VALUES
('admin', '$2y$10$52a0xh19nKSU4oGhs3QxTOZUf7Tu94rqmIDxXObYfSC7PeecGsvqq'),
('alex', '$2y$10$V61RebmywxBcIiFprQYKpuSMnv6NmiHp64tXBYA8p6RBf1uxrdm4a\n'),
('as', '$2y$10$CSMwiVHCJtMRYVINgwazXeFTnsqct5IDPp9A//8Z2miAjFHzfTLO2\n'),
('asir2', '$2y$10$Y3Hq6wWhdTGYGE05gGF6F.XxK2Yy0r7NyoO1.am0ehskGWsIxR7se\n'),
('jose', '$2y$10$yWLvKUu0KsPk7Jh8ZjoJkepqld8NDjx9fYmVoEx3Va97doS7BAx/a\n'),
('oier', '$2y$10$e/ExbRLVHs2wuWELLqMzOejf.jblm23Yi61RAA3HEjzKmcW635DkS\n'),
('po', '$2y$10$pbRdnCcHdkz5hfcFsqbQG.EqkX0DelogE89P0P9AOCT4V3fG7zLdm\n'),
('test', '$2y$10$vlOg7jmcLBLTNjEtG1kVQ.ESutJS0KaLjWt4WQw.rPM6orD2HZcMu\n'),
('tola', '$2y$10$55UOMrb8MTfjY.U2rN3PdOe14PADigtNh0wj8nYaYXGMjaDc7d2G.\n');



ALTER TABLE imagen
  ADD PRIMARY KEY (id);

ALTER TABLE login
ADD PRIMARY KEY (user);

ALTER TABLE imagen
  MODIFY id int(255) NOT NULL AUTO_INCREMENT;



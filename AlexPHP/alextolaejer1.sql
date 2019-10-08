drop database users;
create database users;
use users;

CREATE TABLE users (
  name varchar(20) ,
  password varchar(200) 
    );

Insert into users (name,password) values
('Javi', '$2y$10$M5lENyoVqVMTC9Djy4.WP.oR5hvBbE6362c3ZTYkhTp6tTyFaRGYW'),('Lander', '$2y$10$kIDtzuM3VDy97jjsstjnuuQlESys116kyhJnThJuA422PbpuAuJpW');
create database backyard;
use backyard;
create table utilisateur (
id_utilisateur int primary key auto_increment not null,
nom_utilisateur varchar(50) not null,
prenom_utilisateur varchar(50) not null,
mail_utilisateur varchar(50) unique not null,
password_utilisateur varchar(100) not null,
statut_utilisateur tinyint(1) default (1),
id_roles int not null
)Engine=InnoDB;
create table roles(
id_roles int primary key auto_increment not null,
nom_roles varchar(50) not null
)Engine=InnoDB;

DROP DATABASE gestionformation;
CREATE DATABASE gestionformation;
SHOW DATABASES;
USE gestionformation;

DROP TABLE IF EXISTS formation ;
CREATE TABLE formation (
idformation INT(3) NOT NULL  AUTO_INCREMENT, 
nomformation CHAR(20), 
description CHAR(20), 
dateformation DATE, 
CONSTRAINT PK_PRO PRIMARY KEY (idformation) ) ENGINE=InnoDB;  

DROP TABLE IF EXISTS organisateur ;
CREATE TABLE organisateur (
idorganisateur INT(3) NOT NULL  AUTO_INCREMENT, 
nomorganisateur CHAR(20), 
ville CHAR(20), 
datenaiss DATE, 
salaire INT(5) NOT NULL,
CONSTRAINT PK_PRO PRIMARY KEY (idorganisateur) ) ENGINE=InnoDB;

DROP TABLE IF EXISTS personnel ;
CREATE TABLE personnel (
idpersonnel INT(3) NOT NULL  AUTO_INCREMENT, 
nompersonnel CHAR(20),
adressepersonnel CHAR (20),
codepostale INT(5),
ville CHAR(20), 
datenaiss DATE, 
salaire INT(5) NOT NULL,
CONSTRAINT PK_PRO PRIMARY KEY (idpersonnel) ) ENGINE=InnoDB;

DROP TABLE IF EXISTS participant;
CREATE TABLE participant (
idparticipant INT(3) NOT NULL  AUTO_INCREMENT, 
idpersonnel INT(3)NOT NULL, 
idformation INT(3)NOT NULL,
idorganisateur INT(3) NOT NULL,
CONSTRAINT PK_PRO PRIMARY KEY (idparticipant) ) ENGINE=InnoDB;
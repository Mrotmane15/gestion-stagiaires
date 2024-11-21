CREATE DATABASE ISTA;

USE ISTA;

CREATE TABLE stagiaires (
    matricule INT NOT NULL PRIMARY KEY AUTO_INCREMENT,
    nom VARCHAR(50) NOT NULL,
    prenom VARCHAR(50) NOT NULL,
    filiere VARCHAR(20) NOT NULL,
    annee_etude date NOT NULL,
    type_bac VARCHAR(255) NOT NULL,
    annee_bac VARCHAR(255) NOT NULL
);



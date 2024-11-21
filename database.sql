CREATE DATABASE gestion_stagiaires;

USE gestion_stagiaires;

CREATE TABLE stagiaires (
    id INT NOT NULL PRIMARY KEY AUTO_INCREMENT,
    nom VARCHAR(50) NOT NULL,
    prenom VARCHAR(50) NOT NULL,
    genre ENUM('Homme', 'Femme') NOT NULL,
    cin VARCHAR(11) NOT NULL,
    cne VARCHAR(15) NOT NULL,
    email VARCHAR(320) NOT NULL,
    date_naissance date NOT NULL,
    lieu_naissance VARCHAR(255) NOT NULL,
    phone VARCHAR(10) NOT NULL,
    niveau VARCHAR(20) NOT NULL,
    filiere VARCHAR(20) NOT NULL,
    groupe VARCHAR(20) NOT NULL
);



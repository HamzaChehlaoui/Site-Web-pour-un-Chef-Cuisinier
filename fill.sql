CREATE DATABASE Cuisinier;

CREATE TABLE Roles (
    id INT AUTO_INCREMENT PRIMARY KEY,
    nom VARCHAR(255) NOT NULL  
);

CREATE TABLE Users (
    id INT AUTO_INCREMENT PRIMARY KEY,
    email VARCHAR(255) NOT NULL UNIQUE,
    mot_de_passe VARCHAR(255) NOT NULL,
    nom VARCHAR(255),
    prenom VARCHAR(255), 
    date_creation TIMESTAMP DEFAULT CURRENT_TIMESTAMP,
    role_id INT,  
    FOREIGN KEY (role_id) REFERENCES Roles(id)  
);

CREATE TABLE Reservations (
    id INT AUTO_INCREMENT PRIMARY KEY,
    user_id INT, 
    chef_id INT, 
    date_reservation DATE NOT NULL,
    heure_reservation TIME NOT NULL,
    nombre_personnes INT NOT NULL,
    statut VARCHAR(50),  
    date_creation TIMESTAMP DEFAULT CURRENT_TIMESTAMP,
    FOREIGN KEY (user_id) REFERENCES Users(id), 
    FOREIGN KEY (chef_id) REFERENCES Users(id)  
);

CREATE TABLE Menus (
    id INT AUTO_INCREMENT PRIMARY KEY,
    chef_id INT,  
    titre VARCHAR(255),
    description TEXT,
    date_creation TIMESTAMP DEFAULT CURRENT_TIMESTAMP,
    FOREIGN KEY (chef_id) REFERENCES Users(id)  
);

CREATE TABLE Plats (
    id INT AUTO_INCREMENT PRIMARY KEY,
    menu_id INT, 
    nom VARCHAR(255),
    description TEXT,
    FOREIGN KEY (menu_id) REFERENCES Menus(id)  
);

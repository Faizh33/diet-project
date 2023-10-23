/*Connexion serveur mysql */
mysql -h localhost:8889 -u root -p root

/* Création de la Base de données */
CREATE DATABASE dietDb;

/* Selection de la Base de données */
USE dietDb;

/* Création des tables */
CREATE TABLE Ingredients
(
    id INT NOT NULL PRIMARY KEY AUTO_INCREMENT,
    name VARCHAR(150) NOT NULL,
    quantity INT,
    unity VARCHAR(100)
);

CREATE TABLE Steps
(
    id INT NOT NULL PRIMARY KEY AUTO_INCREMENT,
    description TEXT NOT NULL,
    orderNumber INT NOT NULL
);

CREATE TABLE Reviews
(
    id INT NOT NULL PRIMARY KEY AUTO_INCREMENT,
    name VARCHAR(120) NOT NULL,
    comment TEXT NOT NULL,
    rate INT NOT NULL
);

CREATE TABLE Users
(
    id CHAR(36) NOT NULL PRIMARY KEY,
    lastName VARCHAR(50) NOT NULL,
    firstName VARCHAR(50) NOT NULL,
    role JSON NOT NULL,
    password VARCHAR(50) NOT NULL,
    reviews_id INT,
    FOREIGN KEY (reviews_id) REFERENCES Reviews(id)
);

CREATE TABLE Diets
(
    id INT NOT NULL PRIMARY KEY AUTO_INCREMENT,
    name VARCHAR(150) NOT NULL
);

CREATE TABLE Allergens
(
    id INT NOT NULL PRIMARY KEY AUTO_INCREMENT,
    name VARCHAR(150) NOT NULL
);

CREATE TABLE Contact
(
    id INT NOT NULL PRIMARY KEY AUTO_INCREMENT,
    name VARCHAR(120),
    email VARCHAR(150),
    message TEXT
);

CREATE TABLE Recipes
(
    id INT NOT NULL PRIMARY KEY AUTO_INCREMENT,
    title VARCHAR(255) NOT NULL,
    description TEXT NOT NULL,
    preparationTime INT,
    breakTime INT,
    cookingTime INT,
    pictureName VARCHAR(100),
    ingredients_id INT NOT NULL,
    steps_id INT NOT NULL,
    reviews_id INT,
    FOREIGN KEY (ingredients_id) REFERENCES Ingredients(id) ON DELETE CASCADE,
    FOREIGN KEY (steps_id) REFERENCES Steps(id) ON DELETE CASCADE,
    FOREIGN KEY (reviews_id) REFERENCES Reviews(id) ON DELETE CASCADE
);

CREATE TABLE User_Diets
(
    id INT NOT NULL PRIMARY KEY AUTO_INCREMENT,
    users_id CHAR(36),
    diets_id INT,
    FOREIGN KEY (users_id) REFERENCES Users(id),
    FOREIGN KEY (diets_id) REFERENCES Diets(id)
);

CREATE TABLE User_Allergens
(
    id INT NOT NULL PRIMARY KEY AUTO_INCREMENT,
    users_id CHAR(36) NOT NULL,
    allergens_id INT NOT NULL,
    FOREIGN KEY (users_id) REFERENCES Users(id),
    FOREIGN KEY (allergens_id) REFERENCES Allergens(id)
);

CREATE TABLE Diet_Recipes
(
    id INT NOT NULL PRIMARY KEY AUTO_INCREMENT,
    diets_id CHAR(36) NOT NULL,
    recipes_id INT NOT NULL,
    FOREIGN KEY (diets_id) REFERENCES Diets(id),
    FOREIGN KEY (recipes_id) REFERENCES Recipes(id)
);

CREATE TABLE Allergen_Recipes
(
    id INT NOT NULL PRIMARY KEY AUTO_INCREMENT,
    allergens_id CHAR(36) NOT NULL,
    recipes_id INT NOT NULL,
    FOREIGN KEY (allergens_id) REFERENCES Allergens(id),
    FOREIGN KEY (recipes_id) REFERENCES Recipes(id)
);

/* Utilitaire de sauvegarde de la base de données : */
mysqldump -u root -p root -h localhost:8889 > diet.sql

/* Utilitaire de restauration de la base de données : */
mysql -u root -p root -h localhost:8889 dietDb < diet.sql
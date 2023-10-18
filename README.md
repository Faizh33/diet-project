# Diet-coupart

## LE PROJET Diététicienne-nutritionniste
Sandrine Coupart est une diététicienne-nutritionniste dont le cabinet est situé à Caen. En tant que professionnelle de santé, elle prend en charge des patients dans le cadre de consultations diététiques. Madame Coupart anime également des ateliers de prévention et d’information sur la nutrition. Son fonctionnement habituel était de transmettre par email à ses patients des recettes santé. N’ayant pas de site web, elle voulait profiter de l’occasion pour partager, à l’avenir, quelques-unes de ses recettes à un plus grand nombre de visiteurs. De plus, madame Coupart désirerait qu’il y ait un système d’authentification sur son site, afin de proposer pour chaque patient des recettes supplémentaires adaptées à son régime.

### Fonctionnalités désirées
###### Se connecter
###### Présenter les services
###### Créer un patient
###### Ajouter une recette
###### Afficher les recettes
###### Permettre de contacter la nutritionniste
###### Recueillir les avis des patients sur les recettes

## Pré-requis
PHP (version 8.2)
Composer (pour gérer les dépendances PHP)
Symfony CLI (recommandé pour une meilleure expérience de développement)
Un serveur de base de données compatible (MySQL, PostgreSQL, SQLite, etc.)

## Installation
#### 1.Clonez ce dépôt Git sur votre machine locale en utilisant la commande suivante :
*git clone https://github.com/Faizh33/diet-project*
#### 2.Accédez au répertoire du projet :
*cd mon-projet-symfony*
#### 3.Installez les dépendances du projet à l'aide de Composer :
*composer install*
#### 4.Créez le fichier `.env` à la racine du projet et configurez les variables d'environnement nécessaires pour votre environnement de développement.
#### 5.Créez la base de données et appliquez les migrations:
Les données sont disponibles en mySQL dans le dossier annexes  
*php bin/console doctrine:database:create*  
*php bin/console doctrine:migrations:migrate*
#### 6.Démarrez le serveur de développement Symfony :
*symfony server:start*
Le serveur de développement démarre généralement sur `http://localhost:8000`. Vous pouvez accéder à l'application en ouvrant cette URL dans votre navigateur web.

## Création d'un administrateur
#### 1.Générer un UUID sur un site de génération d'UUID
#### 2.Choisir un mot de passe et utiliser la fonction (password_hash('votre mot de passe', PASSWORD_BCRYPT)) et récupérer le hash du mot de passe.
#### 3.Entrer l'administrateur en base de données.
*INSERT INTO users VALUES('id', 'email', 'firstName', 'lastName', 'password', '["ROLE_ADMIN"]');*

## Documentation
Consultez la documentation de Symfony pour en savoir plus sur la création et la gestion de projets Symfony :
*[Documentation Symfony](https://symfony.com/doc/current/index.html)*

## Problèmes et Support
Si vous rencontrez des problèmes ou avez des questions, n'hésitez pas à ouvrir un ticket (issue) sur ce dépôt. Je serais ravie de vous aider !







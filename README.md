# Asmae_ElHamzaoui_projet-mvc-php

## Contexte du projet
construire une architecture MVC propre et modulaire qui peut être utilisée comme base pour diverses applications web.
## Fonctionnalités principales

**Intégration UI et Ajout Dynamique**

-   Formulaires permettant l'ajout des utilisateurs avec des champs .
-   modales permettant l'ajout des article avec des champs .

**L'affichage des interfaces**
-   Permettre l'affichage des utilisateurs
-   Permettre l'affichage des articles

## Technologies Requises
-   HTML
-   CSS tailwind 
-   JS  natif
-   PHP natif
-   SQL ( base de donnée PostgreSQL)

## Table des matières

-  Lien vers le repository GitHub contenant :[Repo · Asmae_Elhamzaoui_PROJET-MVC-PHP](https://github.com/Youcode-Classe-E-2024-2025/Asmae_ElHamzaoui_projet-mvc-php)

## Installation

### Cloner le dépôt

Pour installer et démarrer l'application, commencez par cloner ce dépôt sur votre machine locale :
 

# Installation et Configuration du Projet

## Prérequis

Avant de cloner ce projet, assurez-vous d'avoir les outils suivants installés :

1. **Serveur Web** : Apache (inclus dans XAMPP, WAMP, ou MAMP) Apache(Laragon).
2. **Base de Données** : PostgreSQL.
3. **PHP** : Version compatible avec les scripts utilisés (au minimum PHP 8.4 recommandé).
4. **Git** : Pour cloner le dépôt.

## Installation

### Étape 1 : Cloner le projet

```bash
git clone https://github.com/Youcode-Classe-E-2024-2025/Asmae_ElHamzaoui_projet-mvc-php
cd Asmae_ElHmazaoui_projet-mvc-php
```

### Étape 2 : Configuration de l'environnement

1. **Serveur Apache et MySQL**  
   - Utilisez un logiciel comme XAMPP, WAMP, ou MAMP pour démarrer Apache et PostgreSQL.  
   - Placez les fichiers du projet dans le répertoire `www` (pour laragon) ou dans le répertoire équivalent de votre serveur local.

2. **Base de Données**  
   - Ouvrez phpMyAdmin (accessible via `http://localhost/8000`).  
   - Créez une base de données avec le nom  : `article`.  
   - Importez le fichier SQL contenant la structure et les données :
     - Si votre fichier SQL n'existe pas, créez-le et ajoutez-le au dépôt pour faciliter l'installation.

### Étape 3 : Exécution du projet

1. Lancez le serveur Apache et MySQL via votre environnement local (exemple : XAMPP).
2. Accédez à votre projet en ouvrant un navigateur et en allant à l'adresse suivante :
   ```
   http://localhost/Asmae_ElHmazaoui_projet-mvc-php
   ```

## Fonctionnalités

- **Formulaires dynamiques** : Gestion via PHP et JavaScript.
- **Interaction avec une base de données MySQL** : Stockage et récupération des données.
- **Style et animations** : Ajoutés avec CSS(tailwind) et JavaScript.

## Structure du Projet
 ![Structure du projet](app/public/assets/images/structureCours.png)
## Outils Utilisés

- **Serveur Web Apache** : Hébergement du projet localement.
- **MySQL** : Base de données pour stocker les informations.
- **PHP** : Traitement côté serveur.
- **HTML, CSS, JavaScript** : Frontend du projet.
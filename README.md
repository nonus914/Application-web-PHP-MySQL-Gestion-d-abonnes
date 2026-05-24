# 👥 Application Web - Gestion d'Abonnés (PHP & MySQL)

Ce projet est une application web de type **CRUD** (Create, Read, Update, Delete) développée en PHP natif et MySQL. Elle permet de gérer une liste d'abonnés de manière sécurisée avec un système d'authentification.

## 🚀 Fonctionnalités principales

* **Inscription (Create) :** Formulaire d'ajout d'un nouvel abonné avec vérifications métier (blocage des mineurs, format du numéro de téléphone).
* **Affichage (Read) :** Liste complète des abonnés avec un système de tri (par nom, prénom, ou identifiant).
* **Modification (Update) :** Interface permettant d'éditer les informations d'un abonné existant.
* **Suppression (Delete) :** Possibilité de retirer un abonné de la base de données.
* **Authentification :** Système de connexion basique différenciant les utilisateurs classiques de l'administrateur.
* **Architecture :** Séparation basique des fichiers entre les vues (`views/`) et la logique de connexion (`controllers/`).

## 🛠️ Prérequis

Pour faire tourner ce projet en local sur votre machine, vous aurez besoin de :
* Un serveur web local comme **XAMPP**, WAMP ou MAMP.
* **PHP** (version 7.4 ou supérieure recommandée).
* **MySQL** ou MariaDB.

## ⚙️ Installation et Démarrage

Suivez ces étapes pour déployer le projet sur votre environnement local :

1. **Cloner le dépôt :**
   Ouvrez votre terminal et clonez ce projet dans le dossier racine de votre serveur web (par exemple `C:\xampp\htdocs\` pour XAMPP) :
   ```bash
   git clone [https://github.com/nonus914/Application-web-PHP-MySQL-Gestion-d-abonnes.git](https://github.com/nonus914/Application-web-PHP-MySQL-Gestion-d-abonnes.git)

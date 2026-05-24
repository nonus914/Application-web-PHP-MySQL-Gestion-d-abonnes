👥 Application Web - Gestion d'Abonnés (PHP & MySQL)
Ce projet est une application web de type CRUD (Create, Read, Update, Delete) développée en PHP natif et MySQL. Elle permet de gérer une liste d'abonnés de manière sécurisée avec un système d'authentification.

🚀 Fonctionnalités principales
Inscription (Create) : Formulaire d'ajout d'un nouvel abonné avec vérifications métier (blocage des mineurs, format du numéro de téléphone).

Affichage (Read) : Liste complète des abonnés avec un système de tri (par nom, prénom, ou identifiant).

Modification (Update) : Interface permettant d'éditer les informations d'un abonné existant.

Suppression (Delete) : Possibilité de retirer un abonné de la base de données.

Authentification : Système de connexion basique différenciant les utilisateurs classiques de l'administrateur.

Architecture : Séparation basique des fichiers entre les vues (views/) et la logique de connexion (controllers/).

🛠️ Prérequis
Pour faire tourner ce projet en local sur votre machine, vous aurez besoin de :

Un serveur web local comme XAMPP, WAMP ou MAMP.

PHP (version 7.4 ou supérieure recommandée).

MySQL ou MariaDB.

⚙️ Installation et Démarrage
Suivez ces étapes pour déployer le projet sur votre environnement local :

1. Cloner le dépôt :
Ouvrez votre terminal et clonez ce projet dans le dossier racine de votre serveur web (par exemple C:\xampp\htdocs\ pour XAMPP) :
git clone https://github.com/nonus914/Application-web-PHP-MySQL-Gestion-d-abonnes.git

2. Démarrer les services :
Lancez les modules Apache et MySQL depuis votre panneau de contrôle XAMPP.

3. Créer la base de données :

Rendez-vous sur http://localhost/phpmyadmin.

Importez le fichier abonnes.sql (fourni à la racine du projet) pour générer automatiquement la base de données et la table nécessaires.

Alternativement, vous pouvez exécuter le script SQL manuellement pour créer la base abonnes.

4. Configuration de la base de données :
Vérifiez le fichier controllers/config.php. Par défaut, il est configuré pour l'environnement XAMPP standard (utilisateur root, sans mot de passe, port 3306). Si votre configuration est différente, mettez à jour ces variables :
$dbhost = 'localhost';
$dbuser = 'root';
$dbpass = '';
$dbname = 'abonnes';

5. Lancer l'application :
Ouvrez votre navigateur web et accédez à la page d'inscription ou de connexion :

http://localhost/Application-web-PHP-MySQL-Gestion-d-abonnes/views/register.php

http://localhost/Application-web-PHP-MySQL-Gestion-d-abonnes/views/login.php

🔒 Accès Administrateur
Pour tester les fonctionnalités complètes (modification et suppression), vous pouvez vous connecter avec le compte administrateur codé en dur dans l'application :

Identifiant : admin

Mot de passe : admin123

Projet développé dans le cadre de mon apprentissage du développement backend avec PHP.

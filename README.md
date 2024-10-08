# Thot-leCoinDesScribes
[Lien vers Thot](http://www.sanaa-thot.simploncertif.fr) 
## Déploiement de l'Application Symfony sur O2switch

Ce projet Symfony est configuré pour être déployé sur un hébergement mutualisé O2switch.
Prérequis

    Un compte d'hébergement O2switch avec un nom de domaine
    Accès au cPanel pour gérer la base de données et les fichiers.
    Un client FTP pour transférer les fichiers (ex: FileZilla).
    Composer installé sur votre machine pour la gestion des dépendances.

## Étapes de déploiement
# 1. Préparation du projet pour la production

#Avant de transférer l'application sur O2switch, effectuez les étapes suivantes en local :

    Configurer l'environnement de production :
        Modifier le fichier .env.local.php :


    Remplacez les informations de connexion à la base de données par celles fournies par O2switch (via cPanel).

Optimiser l'application :

Exécutez les commandes suivantes pour préparer Symfony pour la production :

```bash

    composer install --no-dev --optimize-autoloader
    php bin/console cache:clear --env=prod
    php bin/console cache:warmup
``` 

# 2. Transfert des fichiers sur O2switch

    Connexion au serveur :
        Utilisez un client FTP (comme FileZilla) pour vous connecter avec les identifiants fournis par O2switch (disponibles dans le cPanel sous "FTP Accounts").

    Téléversement :
        Transférez tous les fichiers et dossiers du projet Symfony vers le répertoire public_html du serveur.

# 3. Configuration de la base de données

    Créer une base de données :
        Depuis le cPanel, créez une base de données MySQL et un utilisateur associé avec tous les privilèges.
    Importer les données :
        Utilisez phpMyAdmin (accessible depuis cPanel) pour importer votre fichier SQL si nécessaire.



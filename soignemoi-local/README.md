                     Installation du site we "soignemoi-web"
                     --------------------------------------

1 - Création de la branche locale "soignemoi-local"
-------------------------------------------------
- Ouvrir un terminal
- git clone git@github.com:GerardLeRest/soignemoi-symfony.git
- git branch  (branches locales - on ne voit que la branche master)
- git branch -r (liste de branches distantes)
- git checkout soignemoi-local (création de la branche locale et basculement sur la branche)
- git branch (pour vérifier que l'on est sur la branche soignemoi-local)
- on a alors accès au dossier

2 - Configuration de l'application "Soignemoi-local"
  ----------------------------------------------
- lancer son IDE et ouvrir le projet "Soignemoi-local"
- Dans le fichier .env, y mettre les variables de la base de données
  DATABASE_URL="mysql://utilisateur:motDePasse@127.0.0.1:3306/nomDeLaBDD?serverVersion=8.0.40-0ubuntu0.24.04.1&charset=utf8mb4"

- ouvrir un terminal pour installer les dépendances manquantes du projet: composer install

3 - Mise en place sur le serveur
---------------------------------
- déplacer le dossier soignemoi-local dans /var/www/html
- changer les propriétaires:
    sudo chown -R $USER:www-data /var/www/html/soignemoi-local
- changer les droits:
  voir fichier joint; PermissionsDroits.txt
- lancer le site en executant http://localhost/soignemoi-local dans un navigateur internet.
  http://localhost/soignemoi-local/formulaireMedecin permet de rentrer les information d'un medecin.

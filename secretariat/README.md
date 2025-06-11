# Installation de Secretariat

## 1 - Installation de soignemoi-local

- voir le README de soignemoi-local.

## 2 - Préparation de la base de données

- Modifier des dates de sortie et de rentrée en les mettant à la date du jour dans la base de données avec la routine "ChangerDates"

## 3 - Installation des dépendances
- Installer le paquet virtualvenv:
    pip install virtualenv
- Créer l'environnement virtual: 
    python -m venv env
- Activer l'envirronement 
    source env/bin/activate

## 4 - Configuration des adresses:

- Pour un fonctionnement sur un serveur local local: 
  Vérifier les adresses qui doivent commencer par "http:/localhost/.... 
- Pour un fonctionnement en mode hébergé:
  Vérifier les adresses qui doivent commencer par "'http://www.soignemoi.net/.... (4 adresses en tout)    

## 5 - lancement de l'application

- Ouvrir le dossier dans un IDE. Ouvrir un terminal.
- Taper "python3 Secretariat.py dans le terminal de l'IDE pour lancer l'application

## 6 - Palette
- Blanc #ffffff
- Beige #f8fafc
- Bleu ciel #1977cc
- Bkeu marine #204964
- vert: #446069
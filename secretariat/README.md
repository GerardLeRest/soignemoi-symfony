# Installation de Secretariat

## 1 - Installation de soignemoi-local

- voir le README de soignemoi-local.

## 2 - Préparation de la base de données

- Modifier des dates de sortie et de rentrée en les mettant à la date du jour dans la base de données

## 3 - Installation des dépendances

pip install virtualenv (si non installé)
python -m venv env
source env/bin/activate


## 4 - Configuration des adresses:

- Pour un fonctionnement sur un serveur local local: 
  Vérifier les adresses qui doivent commencer par "http:/localhost/soignemoi-web/.... (5 adresses en tout)
- Pour un fonctionnement en mode hébergé:
  Vérifier les adresses qui doivent commencer par "https://www.soignemoi.net/.... (5 adresses en tout)    

## 5 - lancement de l'application

- Ouvrir le dossier dans un IDE. Ouvrir un terminal.
- Taper "python3 Secretariat.py dans le terminal de l'IDE pour lancer l'application

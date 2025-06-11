
import requests
from typing import List

class Acquisition:

    def recuperation_donnees_clic(self, record_id):
        """
        Récupération des données (détails) depuis le site de Soignemoi.
        retourne une liste de dictionnaire
        """
        self.listes_donnees=[]
        url_complete = f"http://www.soignemoi.net/details/{record_id}"
        try:
            response = requests.get(url_complete)
            if response.status_code == 200:
                self.listes_donnees = response.json()
                print(self.listes_donnees)
                return self.listes_donnees
            else:
                print(f"Erreur lors de la récupération des données !: {response.status_code}")
                return None
        except Exception as e:
            print(f"Une erreur s'est produite lors de la récupération des données : {e}")
        return None


    def recuperation_donnees_bouton(self, url):
            try:
                # Envoyer la requête GET
                reponse = requests.get(url)
                if reponse.status_code == 200:
                    # Transformer le format json en listes de dictionnaires
                    liste_patients = reponse.json()
                    #print(self.liste_patients)
                    print(liste_patients)
                    return liste_patients
                else:
                    print(f"Erreur lors de la récupération des données: {reponse.status_code}")
            except Exception as e: 
                print(f"Une erreur s'est produite lors de la récupération des données : {e}")
            return None  
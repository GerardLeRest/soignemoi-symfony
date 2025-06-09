from PySide6.QtWidgets import QDialog, QVBoxLayout, QLabel, QApplication, QTextEdit
import requests

class AffichageDetails(QDialog):
    """Affichage des détails"""""
    def __init__(self, identity, id_patient, parent=None):
        super().__init__(parent) # voir ligne 85 affichage_identite
        self.id = id_patient
        self.identity = identity 
        self.setWindowTitle(f"{identity}")
        self.setMinimumSize(600, 400)

        # Widgets
        self.titre = QLabel(f"Informations sur {self.identity}")
        self.titre.setStyleSheet("color: #FFB25F; font-weight: bold; font-size: 16px;")
        self.zone_de_texte = QTextEdit()
        self.zone_de_texte.setReadOnly(True)

        # Layout
        layout = QVBoxLayout()
        layout.addWidget(self.titre)
        layout.addWidget(self.zone_de_texte)
        self.setLayout(layout)

        # Récupération des données
        self.recuperation_donnees()

    def recuperation_donnees(self):
        """récupérer les données"""
        url = f"http://localhost:8000/details/{self.id}"
        print("URL utilisée :", repr(url))
        try:
            response = requests.get(url)
            if response.status_code == 200:
                self.liste_donnees = response.json()
                self.affichage_donnees(self.liste_donnees)
            else:
                self.zone_de_texte.setText(f"Erreur : {response.status_code}")
                self.liste_donnees = None
        except Exception as e:
            self.zone_de_texte.setText(f"Erreur de connexion : {e}")
            self.liste_donnees = None

    def affichage_donnees(self, liste_donnees):
        self.liste_donnees = liste_donnees
        categories = ["Séjours :", "Médecins :", "Avis :", "Prescriptions :"]
        self.zone_de_texte.clear()  # vide la zone de texte avant affichage
        html = "" # initialisation de la variable html
        for i, titre in enumerate(categories):
            # titre en orange range gras 

            html += f'<div style="color:#FFB25F; font-weight:bold;">{titre}</div>'
            #self.sous_titre.append(f"\n{titre}")
            for dictionnaire in self.liste_donnees[i]:
                for cle, valeur in dictionnaire.items():
                    html += f'<div style="color:#69927E; font-weight:bold;">{cle}</div>: '
                    html += f'<div style="color:#000000; font-weight:normal;">{valeur}</div>: '
            html += "<br>"
        self.zone_de_texte.setHtml(html)  # On affiche le tout en une fois
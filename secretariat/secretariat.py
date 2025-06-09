import sys
from datetime import datetime
from contenu_frame import ContenuFrame
from PySide6.QtWidgets import QLabel, QApplication, QWidget, QHBoxLayout, QVBoxLayout, QPushButton
from PySide6.QtGui import QPixmap
from acquisition import Acquisition
from affichage_identite import AffichageIdentite # importer la classe Tableau du fichiet Tableau.py

class Secretariat (QWidget):

    def __init__(self):
        """Construction de la fenêtre principale"""
        super().__init__()   # constructeur de la classe parente
        # taille de la fenêtre
        self.setFixedSize(640, 375)
        # creation des boutons
        bouton_tous = QPushButton("tous", self)
        bouton_tous.setFixedWidth(90)
        bouton_entrees = QPushButton("entrées",self)
        bouton_entrees.setFixedWidth(90)
        bouton_sorties = QPushButton("sorties", self)
        bouton_sorties.setFixedWidth(90)
        
         # connexions
        bouton_tous.clicked.connect(self.tous)
        bouton_entrees.clicked.connect(self.entrees)
        bouton_sorties.clicked.connect(self.sorties)
        
         # date
        self.label_date = QLabel()
        self.afficher_heure_courante()# methode plus bas
        
       
        layout_vertical = QVBoxLayout()
        #bouton_sorties.setFixedWidth(120) # espace entre les boutons
        layout_boutons = QHBoxLayout()
        layout_boutons.addWidget(bouton_tous)   
        layout_boutons.addWidget(bouton_entrees)   
        layout_boutons.addWidget(bouton_sorties)   
        layout_boutons.addStretch()  # pousse la date à droite
        layout_boutons.addWidget(self.label_date)
        # Set stylesheet for QPushButton

        # placement du layout_boutons dans le layout général
        layout_vertical.addLayout(layout_boutons) 
        # contenu - frame - date 
        contenu_frame = ContenuFrame(self)
        layout_vertical.addWidget(contenu_frame)
        
        # attacher le layout à la fenêtre
        self.setLayout(layout_vertical)
        self.show()
       
    def tous(self)->None:
        """affichage des donnéesde tous les patients"""
        acquisition = Acquisition()
        donnees = acquisition.recuperation_donnees_bouton('http://localhost:8000/tous')
        self.affichage_donnees("tous", donnees)
        
    def sorties(self)->None:
        """affichage_des donnees de tous les patients sortants"""
        acquisition = Acquisition()
        donnees = acquisition.recuperation_donnees_bouton('http://localhost:8000/sorties')
        self.affichage_donnees("sorties", donnees)
        
    def entrees(self)->None:
        """affichage_des donnees de tous les patients entrants"""
        acquisition = Acquisition()
        donnees = acquisition.recuperation_donnees_bouton('http://localhost:8000/entrees')
        self.affichage_donnees("entrees", donnees)
        
    def affichage_donnees(self, titre_fenetre, patients)->None:
        """affichage_donnees dans un tableau"""
        affichage_identite = AffichageIdentite (titre_fenetre, patients, parent=None)
        affichage_identite.preparation_tableau()
        affichage_identite.affichage_donnees_tableau()
        affichage_identite.exec()
        
    def afficher_heure_courante(self)->None:
        """affichage de l'heure courante"""
        # obtenir la date du jour
        today = datetime.now()
        # définir la date du jour
        formatted_date = today.strftime("%d-%m-%Y")
        # affecter la  date au label
        self.label_date.setText(formatted_date)

    # ----------------------------------------------------
        
if __name__ == '__main__':
    app = QApplication(sys.argv)

    # Feuille de style globale
    app.setStyleSheet("""
    QPushButton {
        background-color: #e0e0e0;
        border: 1px solid #b0b0b0;
        border-radius: 5px;
        padding: 6px 12px;
        font-weight: normal;
    }
    QPushButton:hover {
        background-color: #d0d0d0;
    }

    QHeaderView::section {
        background-color: #34495e;
        color: white;
        font-weight: normal;
        padding: 4px;
    }

    QTableWidget {
        gridline-color: #dcdcdc;
        selection-background-color: #f39c12;
    }
    """)
    
    secretariat = Secretariat ()
    secretariat.show()
    app.exec()

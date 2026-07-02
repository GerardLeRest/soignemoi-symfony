from PySide6.QtWidgets import QApplication, QWidget, QGridLayout, QLabel, QLineEdit, QPushButton, QMessageBox, QSizePolicy
from PySide6.QtCore import Qt
from PySide6.QtGui import QPixmap
import sys
from secretariat import Secretariat

class Fenetre(QWidget):  
    def __init__(self):  
        super().__init__()  
        self.construire_fenetre()

    def construire_fenetre(self) -> None:  
        self.setWindowTitle("Secretariat")  
        layout = QGridLayout()
        # titre
        self.titre = QLabel("Identification")
        layout.addWidget(self.titre,0,0,1,2) # occupe 2colonnes
        self.titre.setAlignment(Qt.AlignmentFlag.AlignCenter)
        self.style_titre()
        layout.setSpacing(25) # espace vertical
        # labels identification
        label_prenom = QLabel("Prénom: ")
        layout.addWidget(label_prenom, 1, 0)
        label_nom = QLabel("Nom: ")
        layout.addWidget(label_nom, 2, 0)
        self.champ_prenom = QLineEdit()
        self.champ_prenom.returnPressed.connect(self.suite)
        layout.addWidget(self.champ_prenom, 1, 1)
        self.champ_nom = QLineEdit()
        self.champ_nom.returnPressed.connect(self.fin)
        layout.addWidget(self.champ_nom, 2, 1)
        layout.setSpacing(15)
        self.style_lineedit()
        # bouton
        self.bouton = QPushButton("Valider")
        layout.addWidget(self.bouton,3,0,1,2, alignment=Qt.AlignmentFlag.AlignCenter) # occupe 2 colonnes et est centré
        self.bouton.clicked.connect(self.recuperation_donnees)
        self.style_bouton()
        #image
        label_image = QLabel()  # Création du label vide
        pixmap = QPixmap("images/logo_60_60.png")  # Chargement de l'image
        label_image.setPixmap(pixmap)  # Mettre l'image dans le label
        layout.addWidget(label_image,4,0,1,2) # occupe deux colonnes
        label_image.setAlignment(Qt.AlignmentFlag.AlignCenter) # centrage
        # rattacher le layout à la fenêtre
        self.setLayout(layout)
        # marge du layout
        layout.setContentsMargins(30, 30, 30, 30)
        # afficher l'interface
        
        self.show()
        self.champ_prenom.setFocus()

    def style_titre(self) -> None:
        """habillage du titre"""
        self.titre.setStyleSheet("""
            QLabel {
                font-family: Arial;
                font-size: 20px;
                color: #ff6700;
                font-weight: bold;
            }
        """)
    
    def style_lineedit(self) -> None:
        """habillage de TOUS les QLineEdit"""
        self.setStyleSheet("""
            QLineEdit {
                border: 1px solid gray;
                border-radius: 8px;
                padding: 6px;
                background-color: white;
            }
        """)

    def style_bouton(self) -> None:
        """habillage du bouton"""
        self.bouton.setStyleSheet("""
            QPushButton {
                border: 1px solid gray;
                background-color: white;
                color: black;
                border-radius: 10px;
                padding: 4px 12px;
            }
        """)
        self.bouton.setSizePolicy(
            QSizePolicy.Policy.Maximum,
            QSizePolicy.Policy.Fixed
        )

    def recuperation_donnees(self) -> None:
        """récupération du nom et du prénom"""
        print ("données validées")
        print (self.champ_prenom.text())
        print (self.champ_nom.text())
        prenom = self.champ_prenom.text().strip()
        nom = self.champ_nom.text().strip()
        if prenom == "Gérard" and nom == "Le Rest":
            print("succès")
            self.secretariat = Secretariat() # création de la fenêtre du secretariat
            self.secretariat.show()
            self.close() # destruction de la fenetre de'identification
        else:
            QMessageBox.warning(
                self,
                "Connexion",
                "Prénom ou nom incorrect."
            )

    def suite(self) -> None:
       """passer du premier champ au deuxième champ"""
       self.champ_nom.setFocus()

    def fin(self) -> None:
        """valider les champs si on appuie sur la touche entrée dans le champ nom"""
        self.recuperation_donnees()

if __name__ == "__main__":  
    app = QApplication(sys.argv)  
    fenetre = Fenetre()  
    app.exec()
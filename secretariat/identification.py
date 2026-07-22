from PySide6.QtWidgets import QApplication, QWidget, QGridLayout, QLabel, QLineEdit, QPushButton, QMessageBox, QSizePolicy
from PySide6.QtCore import Qt
from PySide6.QtGui import QPixmap
import sys, requests
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
        label_email = QLabel("Email: ")
        layout.addWidget(label_email, 1, 0)
        label_mot_de_passe = QLabel("Mot de passe: ")
        layout.addWidget(label_mot_de_passe, 2, 0)
        self.champ_email = QLineEdit()
        self.champ_email.returnPressed.connect(self.suite)
        layout.addWidget(self.champ_email, 1, 1)
        self.champ_mot_de_passe = QLineEdit()
        self.champ_mot_de_passe.returnPressed.connect(self.fin)
        layout.addWidget(self.champ_mot_de_passe, 2, 1)
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
        self.champ_email.setFocus()

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
        """récupération du mot_de_passe et de lemail"""

        email = self.champ_email.text().strip()
        mot_de_passe = self.champ_mot_de_passe.text().strip()
        
        if not email or not mot_de_passe:
            QMessageBox.warning(
                self,
                "Identification",
                "Veuillez saisir votre email et votre mot de passe."
            )
            return
        try:
            reponse = requests.post(
                "http://127.0.0.1:8000/api/secretariat/login",
                json={
                    "email": email,
                    "password": mot_de_passe
                },
                timeout=5
            )

            donnees = reponse.json()

            if reponse.status_code == 200 and donnees.get("succes"):
                QMessageBox.information(
                    self,
                    "Identification",
                    "Identification réussie."
                )

                self.secretariat = Secretariat()
                self.secretariat.show()
                self.hide()
                        
            else:
                QMessageBox.warning(
                    self,
                    "Identification",
                    donnees.get(
                    "message",
                    "Impossible de vous identifier."
                    )
                )

        except requests.RequestException:
            QMessageBox.critical(
                self,
                "Connexion",
                "Impossible de contacter le serveur Symfony."
            )

    def suite(self) -> None:
       """passer du premier champ au deuxième champ"""
       self.champ_mot_de_passe.setFocus()

    def fin(self) -> None:
        """valider les champs si on appuie sur la touche entrée dans le champ mot_de_passe"""
        self.recuperation_donnees()

if __name__ == "__main__":  
    app = QApplication(sys.argv)  
    fenetre = Fenetre()  
    app.exec()
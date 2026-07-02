from PySide6.QtWidgets import QLabel, QApplication, QFrame, QWidget, QHBoxLayout, QVBoxLayout
from PySide6.QtGui import QPixmap
from PySide6.QtCore import Qt
import sys

class ContenuFrame(QFrame):

    def __init__(self, fenetre):
        # initialisation de la classe parente
        super().__init__(fenetre)
        self.label_secretaire = QLabel(self)
        # autre technique)
        # image = QPixmap("images/secretaire_300_300.png"
        # self.label_secretaire.setPixmap(image)
        self.label_secretaire.setPixmap(QPixmap("images/secretaire_300_300.png"))
        self.label_secretaire.setAlignment(Qt.AlignCenter)
        
        #photo de l'adresse
        self.label_adresse  = QLabel(self)
        self.label_adresse.setPixmap(QPixmap("images/adresse.png"))
        self.label_adresse.setAlignment(Qt.AlignCenter)
        
        #photo du logo100x100
        self.label_logo = QLabel(self)
        self.label_logo.setPixmap(QPixmap("images/logo_120_120.png"))
        self.label_logo.setAlignment(Qt.AlignCenter) 
     
        layout_horizontal = QHBoxLayout()
        layout_vertical = QVBoxLayout() 
        layout_vertical.addWidget(self.label_adresse)
        layout_vertical.addWidget(self.label_logo)
        layout_horizontal.addWidget(self.label_secretaire)
        layout_horizontal.addLayout(layout_vertical)
        self.setLayout(layout_horizontal)

        self.show()
        
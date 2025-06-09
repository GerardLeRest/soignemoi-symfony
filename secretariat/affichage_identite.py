from PySide6.QtWidgets import (
    QDialog, QTableWidget, QTableWidgetItem, QVBoxLayout
)
from PySide6.QtGui import QColor
from PySide6.QtCore import Qt
from acquisition import Acquisition
from affichage_details import AffichageDetails  # à adapter selon ton projet

class AffichageIdentite(QDialog):
    def __init__(self, titre_fenetre, patients, parent=None): # parnt=None => indépendance des fenêtres
        super().__init__(parent)
        self.setWindowTitle(titre_fenetre)
        self.setFixedSize(700, 300)
        
        self.liste_patients = patients
        self.id_selectionne = None

        self.table = QTableWidget(self)
        self.table.setColumnCount(4)
        self.table.setHorizontalHeaderLabels(["Id", "Prénom", "Nom", "Adresse postale"])
        self.table.setSelectionBehavior(QTableWidget.SelectRows)
        self.table.setEditTriggers(QTableWidget.NoEditTriggers)
        self.table.itemSelectionChanged.connect(self.identite)

        layout = QVBoxLayout(self)
        layout.addWidget(self.table)
        self.setLayout(layout)

         # Force le comportement de fenêtre indépendante
        self.setWindowFlag(Qt.Window)
         
        # couleurs de selection blanc sur orange 
        self.table.setStyleSheet(
            "QTableWidget::item:selected {"
            "background-color: #FFB25F;"  # Vert foncé, par exemple
            "color: white;"               # Texte blanc sur fond sélectionné
            "}"
)

    def preparation_tableau(self) -> None:
        """Configure titres, largeurs, alignements et couleur des en-têtes"""
        self.table.setColumnWidth(0, 60)
        self.table.setColumnWidth(1, 150)
        self.table.setColumnWidth(2, 150)
        self.table.setColumnWidth(3, 1000)

        for col in range(self.table.columnCount()):
            item = self.table.horizontalHeaderItem(col)
            if item:
                item.setTextAlignment(Qt.AlignLeft)

        # Style en-tête
        self.table.setStyleSheet(
            "QHeaderView::section {"
            "background-color: #4F7F67;"
            "color: white;"
            "font-weight: bold;"
            "padding: 4px;"
            "}"
        )

    def affichage_donnees_tableau(self) -> None:
        """Insère les données patients dans le tableau avec alternance de couleurs"""
        self.table.setRowCount(len(self.liste_patients))

        for i, patient in enumerate(self.liste_patients):
            row_values = [
                str(patient['id']),
                patient['prenom'],
                patient['nom'],
                patient['adressePostale']
            ]
            for j, value in enumerate(row_values):
                item = QTableWidgetItem(value)
                # Alternance de couleur (comme odd/even row)
                if i % 2 == 0:
                    item.setBackground(QColor("#CED4DA"))  # ligne paire
                else:
                    item.setBackground(QColor("#69927E"))  # ligne impaire
                self.table.setItem(i, j, item)

    def identite(self) -> None:
        """Appelé quand l'utilisateur sélectionne une ligne"""
        selected_items = self.table.selectedItems()
        if not selected_items or len(selected_items) < 3:
            return

        prenom = selected_items[1].text()
        nom = selected_items[2].text()
        identite = f"{prenom} {nom}"
        # selected_items[0] peut ramené de mauvaises valeurs
        try:
            id = int(selected_items[0].text().strip())
            print("ID sélectionné :", id)
        except (ValueError, AttributeError) as e:
            print("ID invalide ou cellule vide :", e)
            return
        

        print("ID sélectionné :", id)
        id_text = selected_items[0].text().strip()
        id = int(id_text)
        prenom = selected_items[1].text()
        nom = selected_items[2].text()
        identite = f"{prenom} {nom}"
        print("ID sélectionné :", id)

        details = AffichageDetails(identite, id) #None : séparer la fenêtre d'application et cette fenêtre détails
        details.setWindowFlag(Qt.Window)  # Pour une vraie fenêtre indépendante
        details.exec()  # Affichage non-bloquant

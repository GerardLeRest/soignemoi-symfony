# affichage_details.py

from PySide6.QtWidgets import QDialog, QVBoxLayout, QLabel, QTextEdit
from acquisition import Acquisition

class AffichageDetails(QDialog):
    """Boîte de dialogue qui affiche les détails d'un patient."""
    def __init__(self, identity: str, id_patient: int, parent=None):
        super().__init__(parent)
        self.id       = id_patient
        self.identity = identity

        # Configuration de la fenêtre
        self.setWindowTitle(f"Détails – {self.identity}")
        self.setMinimumSize(600, 400)

        # --- Widgets ---
        self.titre = QLabel(f"Informations sur {self.identity}")
        self.titre.setStyleSheet(
            "color: #1977CC; "
            "font-weight: bold; "
            "font-size: 16px;"
        )

        self.zone_de_texte = QTextEdit()
        self.zone_de_texte.setReadOnly(True)

        # --- Layout ---
        layout = QVBoxLayout(self)
        layout.addWidget(self.titre)
        layout.addWidget(self.zone_de_texte)
        self.setLayout(layout)

        # Lancer la récupération et l'affichage des données
        self.recuperation_donnees()

    def recuperation_donnees(self):
        """
        Récupère depuis l'API Soignemoi les détails du patient
        et déclenche leur affichage.
        """
        acq = Acquisition()
        data = acq.recuperation_donnees_clic(self.id)

        if not data:
            # Message d'erreur simple si rien n'a été retourné
            self.zone_de_texte.setText(
                "Erreur de connexion ou aucun détail trouvé."
            )
            return

        # Appel de la méthode qui existe bien :
        self.affichage_donnees(data)

    def affichage_donnees(self, liste_donnees):
        """
        Formate le JSON reçu en HTML et l'injecte dans la QTextEdit.
        On part du principe que liste_donnees est une liste de 4 listes
        : Séjours, Médecins, Avis, Prescriptions.
        """
        categories = ["Séjours :", "Médecins :", "Avis :", "Prescriptions :"]
        html = ""

        for idx, titre in enumerate(categories):
            html += (
                f'<div style="color:#1977CC; '
                f'font-weight:bold;">{titre}</div>'
            )

            # liste_donnees[idx] doit être une liste de dicts
            for d in liste_donnees[idx]:
                for cle, valeur in d.items():
                    html += (
                        f'<div style="color:#446069; '
                        f'font-weight:bold;">{cle}</div>: '
                        f'<div style="color:#000000; '
                        f'font-weight:normal;">{valeur}</div><br>'
                    )
            html += "<br>"

        self.zone_de_texte.setHtml(html)


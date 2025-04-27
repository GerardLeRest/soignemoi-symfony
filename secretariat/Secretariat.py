from struct import pack
import tkinter as tk
from tkinter import ttk ## bibliothèque de widgets plus modernes tk
from datetime import datetime
import Frame_canevas
from Acquisition import Acquisition
from Affichage_identite import Affichage_identite # importer la classe Tableau du fichiet Tableau.py

class Secretariat (tk.Tk):

    def __init__(self):
        """Construction de la fenêtre principale"""
        super().__init__()   # constructeur de la classe parente
        # Frame des boutons en haut - position 0,0 - éléments au centre
        self.frame_boutons = ttk.Frame(self)
        self.frame_boutons.grid(row=0, column=0)
        # afficher les trois boutons en haut à gauche
        bouton_tous = ttk.Button(self.frame_boutons, text="Tous", command=self.tous)
        bouton_tous.pack(side="left", padx = 4, pady = 4)
        bouton_suite =ttk.Button(self.frame_boutons, text="Sorties", command=self.sorties)
        bouton_suite.pack(side="left", padx = 4, pady = 4)
        bouton_entrees =ttk.Button(self.frame_boutons, text="Entrees", command=self.entrees)
        bouton_entrees.pack(side="left", padx = 4, pady = 4)
        # label de la date courante
        self.label_date = ttk.Label(self.frame_boutons)
        self.label_date.pack(padx=10,pady=8)
        self.afficher_heure_courante()
        # Frame du canvas partie intérieure de l'application
        self.frame_canvas = Frame_canevas.Frame_canevas(self)
        self.frame_canvas.grid(row=1,column=0)
       
    def tous(self)->None:
        """affichage de tous les patients"""
        acquisition = Acquisition()
        donnees = acquisition.recuperation_donnees_bouton('https://soignemoi.net/tous')
        self.affichage("tous", donnees)
        
    def sorties(self)->None:
        """affichage de tous les patients sortants"""
        acquisition = Acquisition()
        donnees = acquisition.recuperation_donnees_bouton('https://soignemoi.net/sorties')
        self.affichage("sorties", donnees)
        
    def entrees(self)->None:
        """affichage de tous les patients entrants"""
        acquisition = Acquisition()
        donnees = acquisition.recuperation_donnees_bouton('https://soignemoi.net/entrees')
        self.affichage("entrees", donnees)
        
    def affichage(self, titre_fenetre, patients)->None:
        """affichage dans un tableau"""
        affichage_identite = Affichage_identite(self, titre_fenetre, patients)
        affichage_identite.preparation_tableau()
        affichage_identite.affichage_donnees_tabeau()
        affichage_identite.habillage_tableau()
        
    def afficher_heure_courante(self)->None:
        """affichage de l'heure courante"""
        # obtenir la date du jour
        today = datetime.now()
        # définir la date du jour
        formatted_date = today.strftime("%d-%m-%Y")
        # affecter la  date au label
        self.label_date.config(text=formatted_date)

    # ----------------------------------------------------
        
if __name__ == '__main__':
    App=Secretariat()
    App.resizable(width=False,height=False)
    App.title('Secretariat')
    App.mainloop()
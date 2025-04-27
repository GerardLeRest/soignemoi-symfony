# source - tableau:
# https://stackoverflow.com/questions/75294027/why-is-my-tkinter-treeview-not-changing-colors
import requests
import tkinter as tk
from tkinter import ttk
from tkinter.messagebox import showinfo
from Affichage_details import Affichage_details
from Acquisition import Acquisition

class Affichage_identite(tk.Toplevel):
    
    def __init__(self, master, titre_fenetre, patients): # self: fenêtre tkToplevel - fenetre: fenetre mère - titre de la fenêtre)
        super().__init__(master) # Initialisation de la fenetrte parente
        self.title(titre_fenetre) # on donne le tite à la fenêtre - 
        self.resizable(width=False, height=False) # bloquer le redimensionnement
        self.geometry("700x300")  # Dimensions de la fenêtrefenetre_application("Fenêtre Secondaire")
        #self(width=False,height=False)
        self.liste_patients = patients
        self.id_selectionne = None  # permet de récupéer l'ID sélectionnée au clic sur la ligne
        ## Tableau Triview
        # définir les colonnes du tableau
        columns = ('id','prenom', 'nom', 'adressePostale')
        self.tree = ttk.Treeview(self, columns=columns, show='headings')
        self.tree.grid(row=0, column=0, sticky='nsew')
        # sélection d'un enregistrement
        self.tree.bind('<<TreeviewSelect>>', self.identite) # déclenchement au clic de la souris sur la ligne
        self.numero_ligne=0
    
    def preparation_tableau(self) -> None:
        """affichage des titres et des colonnes"""
        # style the widget
        s = ttk.Style()
        s.theme_use('clam')
        # definir les titres
        self.tree.heading('id', text='Id', anchor=tk.W)
        self.tree.heading('prenom', text='Prenom', anchor=tk.W)
        self.tree.heading('nom', text='Nom', anchor=tk.W)
        self.tree.heading('adressePostale', text='Adresse_Postale', anchor=tk.W)
        s.configure("Treeview.Heading", background="#4F7F67")
         #definir les colonnes
        self.tree.column('id', width=60, anchor=tk.W) # colonne de largeur 60 px et id à gauche (West)
        self.tree.column('prenom', width=150, anchor=tk.W)  
        self.tree.column('nom', width=150, anchor=tk.W)  
        self.tree.column('adressePostale', width=1000, anchor=tk.W)  

    def affichage_donnees_tabeau(self) ->None:
        """afficha des données des patients dans le tableau"""
        # rentrer les données
        i = 1
        for patient in self.liste_patients:  # C'est une liste de dictionnaire
            row_values = (patient['id'], patient['prenom'], patient['nom'], patient['adressePostale'])
            i += 1
            if i % 2:
                self.tree.insert('', tk.END, values=row_values, tags=('oddrow',))
            else:
                self.tree.insert('', tk.END, values=row_values, tags=('evenrow',))
            
    def identite(self, event)->None: # lancé par un double-clic - voir l'initialisation
        """récupération des prenoms, noms, et de l'Id"""
        selected_items = self.tree.selection()  # Récupère la liste des éléments sélectionnés dans le Treeview.
        selected_item = selected_items[0]  # Prend uniquement le premier élément sélectionné.
        valeurs = self.tree.item(selected_item, 'values') # récupérer les valeurs des colonnes d'une ligne sélectionnée dans le Treeview
        id = valeurs[0]  # Récupère l'id
        prenom = valeurs[1]  # Récupère le prénom
        nom = valeurs[2]  # Récupère le nom
        identite = prenom + " " + nom
        acquisition = Acquisition()
        donnees = acquisition.recuperation_donnees_clic(id)
        details = Affichage_details(self, identite, id)
        details.affichage_donnees( donnees)
        
    def habillage_tableau(self)->None:
        """Création et configuration de la Scrollbar"""
        scrollbar = ttk.Scrollbar(self, orient=tk.VERTICAL, command=self.tree.yview)
        self.tree.configure(yscroll=scrollbar.set)
        scrollbar.grid(row=0, column=1, sticky='ns')
        # couleur de fond des lignes
        self.tree.tag_configure('oddrow', background="#FFFFFF")
        self.tree.tag_configure('evenrow', background="#CED4DA")

if __name__ == '__main__':       
    root = tk.Tk()
    root.title("fenêtre mère")
    patients =[{'id': 1, 'prenom': 'Alice', 'nom': 'Durand', 'adressePostale': '10 Rue de Vitre, Chantepie'}, {'id': 2, 'prenom': 'Ahmed', 'nom': 'Al-Farsi', 'adressePostale': '25 Avenue de Bretagne, Cesson-Sévigné'}, {'id': 2, 'prenom': 'Ahmed', 'nom': 'Al-Farsi', 'adressePostale': '25 Avenue de Bretagne, Cesson-Sévigné'}, {'id': 3, 'prenom': 'Kofi', 'nom': 'Adjoa', 'adressePostale': '8 Rue du Bocage, Vezin-le-Coquet'}, {'id': 5, 'prenom': 'François', 'nom': 'Girard', 'adressePostale': '47 Rue de Lorient, Montgermont'}, {'id': 7, 'prenom': 'Gérard', 'nom': 'LE REST', 'adressePostale': '12 ALLEE DU BOIS JACOB'}]
    tableau = Affichage_identite(root, "TopLevel", patients)
    acquisition = Acquisition()
    acquisition.recuperation_donnees_clic(2)
    tableau.affichage_donnees_tabeau()
    tableau.habillage_tableau()
    root.mainloop()
    
    
    # Serveur Python Flask
    # adresse du serveur: http://127.0.0.1:5000/
    # libération du port 5000
    # lsof -i:5000
    # kill -9 PID 
    
    # serveur php
    # adresse du serveur: http://127.0.0.1:/
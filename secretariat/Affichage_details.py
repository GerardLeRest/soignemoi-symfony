import tkinter as tk
from tkinter import ttk

class Affichage_details(tk.Toplevel):
    
    def __init__(self, fenetre, identite, id):
        super().__init__(fenetre) # Initialisation de la fenêtre Toplevel avec 'fenetre' comme parent.
        self.title(f"{identite}")
        self.resizable(width=False, height=False) # bloquer le redimensionnement
        self.id = id
        # Cadre de l'application
        frame = ttk.Frame(self)
        frame.pack()
        # Créer une zone de texte
        self.zone_de_texte = tk.Text(frame, height=30, width=100)  # Assurez-vous que le widget est placé dans le Toplevel, pas dans 'fenetre'
        self.zone_de_texte.grid(row=0, column=0, sticky='nsew', padx=10, pady=10)
        # Créer une scrollbar et l'attacher à la zone de texte
        scrollbar = ttk.Scrollbar(frame, orient='vertical', command=self.zone_de_texte.yview)  # 'self' au lieu de 'fenetre'
        scrollbar.grid(row=0, column=1, sticky='ns')  # Utilisation de 'grid' au lieu de 'pack'
        # Configurer la zone de texte pour qu'elle utilise la scrollbar
        self.zone_de_texte.config(yscrollcommand=scrollbar.set)
       
    def affichage_donnees(self, listes_donnees):
        "affichage de données du patient sélectionné"
        # Configuration des tags avec la couleur (style de la police)
        self.zone_de_texte.tag_configure("gras_orange", font=("Helvetica", 12, "bold"), foreground="#FFA500")
        self.zone_de_texte.tag_configure("gras_vert", font=("Helvetica", 12, "bold"), foreground="#4F7F67")
        self.zone_de_texte.tag_configure("normal", font=("Helvetica", 12, "normal"))
        categories = ["Sejours: ", "Medecins: ", "Avis: ", "Prescrition: "]
        for i in range(len(categories)):
            self.zone_de_texte.insert(tk.END, f"{categories[i]} \n", "gras_orange")

            for dictionnaire in listes_donnees[i]:
                for cle, valeur in dictionnaire.items():
                    self.zone_de_texte.insert(tk.END, f"{cle}: ", "gras_vert")
                    self.zone_de_texte.insert(tk.END, f"{valeur} \n", "normal")
            self.zone_de_texte.insert(tk.END, "\n")

         
# --------------------------------------------------------------------------------------------------        
           
if __name__ == "__main__":
    root = tk.Tk()
    root.title("fenêtre")
    root.resizable(width=False,height=False)
    details = Affichage_details(root, "gerard LE REST", 4)
    details.recuperation_donnees()
    root.mainloop()
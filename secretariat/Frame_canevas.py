import tkinter as tk
from tkinter import ttk
from PIL import Image, ImageTk

class Frame_canevas(ttk.Frame):
    
    def __init__(self, master):
        # initialisation de la classe parente
        super().__init__(master)
        self.canvas = tk.Canvas(self, width=600, height=400, bg="white")
        self.canvas.pack()
        self.master = master
        # photo 1
        # créer l'manfe avec la methode creer_image
        self.photo1 = self.creer_image("images/secretaire_300_300.png")
        # ajouter une photo au canevas
        self.canvas.create_image(20, 50, anchor='nw', image=self.photo1)
        # photo2
        self.photo2 = self.creer_image("images/logo_120_120.png")
        self.canvas.create_image(390, 220, anchor='nw', image=self.photo2)
        # photo3
        self.photo3 = self.creer_image("images/adresse.png")
        self.canvas.create_image(320, 60, anchor='nw', image=self.photo3)
       
    def creer_image(self, image_a_afficher):
        # Charger une image avec Pillow
        image = Image.open(image_a_afficher)
        # Convertir l'image Pillow en format utilisable par Tkinter
        photo = ImageTk.PhotoImage(image)
        return photo
            
 # ----------------------------------------------------
        
if __name__ == '__main__':
    root = tk.Tk()
    root.title('Fenetre')
    root.resizable(width=False,height=False)
    frame = Frame_canevas(root)
    frame.pack()
    root.mainloop()        

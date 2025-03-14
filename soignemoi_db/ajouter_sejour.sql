USE Soignemoi;

-- Supprimer la procédure si ajouterSejour();

CREATE PROCEDURE ajouterSejour
    (IN date_debut date,
     IN date_fin date,
     IN motif_sejour text,
     IN specialite varchar(100),
     IN medecin_souhaite varchar(100),
     IN patient_id int)

    INSERT INTO sejours (dateDebut, dateFin, motifSejour, specialite, medecinSouhaite, idPatient)
    VALUES (dateDebut, dateFin, motifSejour, specialite, medecinSouhaite, idPatient);

-- ne pas oublier de d'exécture: "call ajouterSejour();" , une fois la procédure crééé

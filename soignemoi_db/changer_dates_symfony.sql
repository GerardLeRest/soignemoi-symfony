-- Supprimer la procédure si elle existe
DROP PROCEDURE IF EXISTS changerDates;

DELIMITER //

CREATE PROCEDURE changerDates()

BEGIN
    UPDATE sejour
    SET date_debut = CURRENT_DATE
    WHERE id = 1;

    UPDATE sejour
    SET date_debut = CURRENT_DATE
    WHERE id = 3;

    UPDATE sejour
    SET date_debut = CURRENT_DATE
    WHERE id = 7;

    UPDATE sejour
    SET date_fin = CURRENT_DATE
    WHERE id = 5;
END //

DELIMITER ;

-- ne pas oublier de d'exécture: call changerDates(); , une fois la procédure crééé

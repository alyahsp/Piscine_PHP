SELECT COUNT(DISTINCT id_film) AS films
FROM historique_membre
WHERE date BETWEEN TO_DATE ('30/10/2006', 'dd/mm/yyyy')
AND TO_DATE ('27/07/2007', 'dd/mm/yyyy') OR (EXTRACT(day FROM date) = 24 AND EXTRACT(day FROM date) = 12);

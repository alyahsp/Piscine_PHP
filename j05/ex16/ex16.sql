SELECT COUNT(DISTINCT id_film) AS films
FROM historique_membre
WHERE date BETWEEN '2006/10/30' AND '2007/07/27' OR (EXTRACT(day FROM date) = 24 AND EXTRACT(month FROM date) = 12);

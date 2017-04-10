SELECT titre AS Titre, resum AS 'Resume', annee_prod
FROM film
INNER JOIN ON titre.id_genre = genre.id_genre
WHERE genre.nom='erotic'
ORDER BY titre.annee_prod DESC; 

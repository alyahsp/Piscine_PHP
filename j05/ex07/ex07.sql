SELECT titre, resum
FROM film
WHERE title LIKE '%42%' OR resum LIKE '%42%'
ORDER BY duree_min ASC;

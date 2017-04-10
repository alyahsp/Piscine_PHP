SELECT nom, prenom
FROM fiche_personne
WHERE nom LIKE '_%-%_'
ORDER BY nom, prenom;

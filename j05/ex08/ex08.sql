SELECT nom, prenom, YEAR(date_naissance) AS 'date de naissance'
FROM fiche_personne
WHERE 'date de naissance'='1998'
ORDER BY nom ASC;

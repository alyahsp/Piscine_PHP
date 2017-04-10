SELECT etage_salle AS etage, nbr_siege AS siege
FROM salle
GROUP BY etage
ORDER BY siege DESC;

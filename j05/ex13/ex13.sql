SELECT ROUND(AVG(nbr_siege), 0) AS moyenne
FROM salle
GROUP BY numero_salle;

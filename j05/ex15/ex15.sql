SELECT REVERSE(MID(telephone, 2, 9)) AS enohpelet
FROM distrib
WHERE telephone LIKE '05%'

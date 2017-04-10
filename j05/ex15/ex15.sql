SELECT REVERSE(MID(telephone, 1, 9)) AS enohpelet
FROM distrib
WHERE telephone LIKE '05%'

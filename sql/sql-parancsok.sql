-- Minden érték lekérése
SELECT *
FROM tablanev

SELECT oszlop1, oszlop2, oszlop3
FROM tablanev

SELECT `oszlop1`, `oszlop2`, `oszlop3`
FROM tablanev

-- Feltétellel
SELECT *
FROM tablanev
WHERE feltetel

SELECT oszlop1, oszlop2, oszlop3
FROM tablanev
WHERE feltetel

-- Keresés LIKE segítségével
SELECT oszlop1, oszlop2, oszlop3
FROM tablanev
WHERE oszlop1 LIKE kifejezes

SELECT oszlop1, oszlop2, oszlop3
FROM tablanev
WHERE oszlop1 LIKE %kifejezes%

-- Rendezés ASC [A-Z-ig], DESC [Z-A-ig]
SELECT *
FROM tablanev
ORDER BY oszlop1 ASC

SELECT *
FROM tablanev
ORDER BY oszlop1 DESC

SELECT *
FROM tablanev
WHERE feltetel
ORDER BY oszlop1 DESC

SELECT *
FROM tablanev
WHERE feltetel
ORDER BY oszlop1 DESC, oszlop2 ASC

-- Adott darabszám lekérése
SELECT *
FROM tablanev
LIMIT 10

SELECT *
FROM tablanev
LIMIT 10, 10

-- Rekord beszúrása
INSERT INTO tablanev
(oszlop1, oszlop2, oszlop3)
VALUES
('ertek1', ertek2, ertek3)

-- Rekordok törlése
DELETE FROM tablanev
WHERE feltetel

-- Rekordok módosítása
UPDATE tablanev
SET oszlop1 = ertek1, oszlop2 = 'ertek2'
WHERE feltetel
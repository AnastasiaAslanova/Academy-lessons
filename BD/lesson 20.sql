SELECT model,speed,hd FROM pc WHERE price < 500;
SELECT Maker FROM product WHERE type = 'printer' GROUP BY Maker;
SELECT model,ram,screen FROM laptop WHERE price > 1000;
SELECT * FROM Printer WHERE color = 'y';
SELECT model,speed,hd FROM pc WHERE price < 600 AND (cd = '12x' OR cd = '24x');

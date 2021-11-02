SELECT * FROM productos WHERE precio > 10000 AND fk_idtipoproducto = 1;
SELECT * FROM productos WHERE precio > 5000 AND fk_idtipoproducto != 2;
SELECT * FROM productos WHERE fk_idmarca = 3;
SELECT * FROM productos WHERE descripcion LIKE '%bluetooth%';
SELECT * FROM productos ORDER BY precio DESC;
SELECT * FROM productos WHERE cantidad < 10;
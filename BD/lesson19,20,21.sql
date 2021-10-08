CREATE USER 'bigAdmin'@'localhost' IDENTIFIED BY '12345';
GRANT ALL PRIVILEGES ON *.* TO 'bigAdmin'@'localhost';
FLUSH PRIVILEGES;

CREATE USER 'admin'@'localhost' IDENTIFIED BY '54321';
GRANT SELECT, INSERT ON beetroot.* TO 'admin'@'localhost';
FLUSH PRIVILEGES;

INSERT goods(good_name, price, quantity,category_id) VALUES ('laptop', 2500, 50, 1);
INSERT goods(good_name, price, quantity,category_id) VALUES ('tablet', 1500, 75, 1);
INSERT goods(good_name, price, quantity,category_id) VALUES ('washer', 3000, 30, 2);
INSERT goods(good_name, price, quantity,category_id) VALUES ('refrigerator', 4500, 40, 2);
INSERT goods(good_name, price, quantity,category_id) VALUES ('headphones', 500, 150, 3);
INSERT goods(good_name, price, quantity,category_id) VALUES ('speaker', 450, 120, 3);
INSERT goods(good_name, price, quantity,category_id) VALUES ('flash_drive', 80, 350, 4);
INSERT goods(good_name, price, quantity,category_id) VALUES ('memory_card', 60, 400, 4);

INSERT category(name_of_category,category_id) VALUES ('office_equipment',1);
INSERT category(name_of_category,category_id) VALUES ('household_appliances',2);
INSERT category(name_of_category,category_id) VALUES ('sound',3);
INSERT category(name_of_category,category_id) VALUES ('memory',4);

INSERT users(name, email, password) VALUES ('Aslanova_Anastasia','nastya@gmail.com','233445');
INSERT users(name, email, password) VALUES ('Ivan_Ivanov','ivan@gmail.com','12345');
INSERT users(name, email, password) VALUES ('Petr_Petrov','petr@gmail.com','54321');
INSERT users(name, email, password) VALUES ('Anna_Antonenko','anna@gmail.com','544332');

INSERT shopping_cart (product_id, user_id, quantity) VALUES (1,1,1);
INSERT shopping_cart (product_id, user_id, quantity) VALUES (3,2,2);

SELECT COUNT(good_name) FROM goods;
SELECT good_name FROM goods WHERE quantity=(SELECT max(quantity) FROM goods);
UPDATE goods, (SELECT min(quantity) quantitymin FROM goods) goodsmin SET goods.quantity=goods.quantity*2
WHERE goods.quantity = goodsmin.quantitymin;
SELECT name,email,good_name FROM users u INNER JOIN shopping_cart sc on u.user_id = sc.user_id INNER JOIN goods g on sc.product_id=g.id ;


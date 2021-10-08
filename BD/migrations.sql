
CREATE TABLE beetroot.goods (
    `id` INT(7) NOT NULL AUTO_INCREMENT ,
     `good_name` VARCHAR(255) NOT NULL ,
      `price` DECIMAL UNSIGNED,
       `quantity` INT(10) NOT NULL ,
        `category_id` INT(7) NOT NULL ,
         PRIMARY KEY (`id`));
CREATE TABLE `beetroot`.`category` (
    `name_of_category` VARCHAR(255) NOT NULL ,
    `category_id` INT(10) NOT NULL , PRIMARY KEY (`category_id`));
CREATE TABLE beetroot.users (
        `user_id` INT(7) NOT NULL AUTO_INCREMENT ,
        `email` VARCHAR(30) NOT NULL ,
        `password` VARCHAR(30) NOT NULL ,
        PRIMARY KEY (`user_id`));
CREATE TABLE `beetroot`.`shopping_cart` (
        `product_id` INT(7) NOT NULL ,
        `user_id` INT(7),
        `quantity` INT(5),
        `order_date` TIMESTAMP);










CREATE TABLE beetroot.products (
    `id` INT(7) NOT NULL AUTO_INCREMENT ,
     `product_name` VARCHAR(30) NOT NULL ,
      `price` INT(5) NOT NULL ,
       `quantity` INT(6) NOT NULL ,
        `category_id` INT(3) NOT NULL ,
         PRIMARY KEY (`id`));
CREATE TABLE `beetroot`.`category` (
    `name_of_category` VARCHAR(50) NOT NULL ,
    `categoryId` INT(3) NOT NULL , PRIMARY KEY (`categoryId`));
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







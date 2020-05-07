CREATE DATABASE IF NOT EXISTS db_elliot;
USE db_elliot;

CREATE TABLE IF NOT EXISTS tbl_users (
    user_id INT(11) AUTO_INCREMENT NOT NULL PRIMARY KEY,
    first_name VARCHAR(50) NOT NULL,
    last_name VARCHAR(50) NOT NULL,
    email VARCHAR(50) NOT NULL,
    user_pass LONGTEXT NOT NULL
);

CREATE TABLE IF NOT EXISTS tbl_products (
    prod_id INT(11) AUTO_INCREMENT NOT NULL PRIMARY KEY,
    prod_name VARCHAR(50) NOT NULL,
    prod_price DECIMAL(5,2),
    prod_desc TEXT,
    prod_img TEXT,
    prod_filters VARCHAR(10)
);

INSERT INTO tbl_products (prod_name, prod_price, prod_desc, prod_img, prod_filters) VALUES 
("Watch 1", 100, "Lorem ipsum dolor sit amet, consectetur adipiscing elit. Etiam maximus purus et nisi faucibus, vitae ultricies tortor rhoncus. Cras nec nulla lectus.", "./assets/img/thumbnails/t_watch1.png", "men"),
("Watch 2", 200, "Lorem ipsum dolor sit amet, consectetur adipiscing elit. Etiam maximus purus et nisi faucibus, vitae ultricies tortor rhoncus. Cras nec nulla lectus.", "./assets/img/thumbnails/t_watch2.png", "women"),
("Watch 3", 300, "Lorem ipsum dolor sit amet, consectetur adipiscing elit. Etiam maximus purus et nisi faucibus, vitae ultricies tortor rhoncus. Cras nec nulla lectus.", "./assets/img/thumbnails/t_watch3.png", "men"),
("Watch 4", 400, "Lorem ipsum dolor sit amet, consectetur adipiscing elit. Etiam maximus purus et nisi faucibus, vitae ultricies tortor rhoncus. Cras nec nulla lectus.", "./assets/img/thumbnails/t_watch4.png", "women"),
("Watch 5", 450.48, "Lorem ipsum dolor sit amet, consectetur adipiscing elit. Etiam maximus purus et nisi faucibus, vitae ultricies tortor rhoncus. Cras nec nulla lectus.", "./assets/img/thumbnails/t_watch5.png", "men"),
("Watch 6", 657.99, "Lorem ipsum dolor sit amet, consectetur adipiscing elit. Etiam maximus purus et nisi faucibus, vitae ultricies tortor rhoncus. Cras nec nulla lectus.", "./assets/img/thumbnails/t_watch6.png", "women"),
("Watch 7", 125.50, "Lorem ipsum dolor sit amet, consectetur adipiscing elit. Etiam maximus purus et nisi faucibus, vitae ultricies tortor rhoncus. Cras nec nulla lectus.", "./assets/img/thumbnails/t_watch7.png", "men"),
("Watch 8", 230.90, "Lorem ipsum dolor sit amet, consectetur adipiscing elit. Etiam maximus purus et nisi faucibus, vitae ultricies tortor rhoncus. Cras nec nulla lectus.", "./assets/img/thumbnails/t_watch8.png", "men"),
("Watch 9", 95.99, "Lorem ipsum dolor sit amet, consectetur adipiscing elit. Etiam maximus purus et nisi faucibus, vitae ultricies tortor rhoncus. Cras nec nulla lectus.", "./assets/img/thumbnails/t_watch9.png", "women"),
("Watch 10", 135.60, "Lorem ipsum dolor sit amet, consectetur adipiscing elit. Etiam maximus purus et nisi faucibus, vitae ultricies tortor rhoncus. Cras nec nulla lectus.", "./assets/img/thumbnails/t_watch10.png", "women"),
("Watch 11", 400.00, "Lorem ipsum dolor sit amet, consectetur adipiscing elit. Etiam maximus purus et nisi faucibus, vitae ultricies tortor rhoncus. Cras nec nulla lectus.", "./assets/img/thumbnails/t_watch11.png", "men"),
("Watch 12", 320.00, "Lorem ipsum dolor sit amet, consectetur adipiscing elit. Etiam maximus purus et nisi faucibus, vitae ultricies tortor rhoncus. Cras nec nulla lectus.", "./assets/img/thumbnails/t_watch12.png", "women"),
("Watch 13", 520.90, "Lorem ipsum dolor sit amet, consectetur adipiscing elit. Etiam maximus purus et nisi faucibus, vitae ultricies tortor rhoncus. Cras nec nulla lectus.", "./assets/img/thumbnails/t_watch13.png", "women"),
("Watch 14", 100.00, "Lorem ipsum dolor sit amet, consectetur adipiscing elit. Etiam maximus purus et nisi faucibus, vitae ultricies tortor rhoncus. Cras nec nulla lectus.", "./assets/img/thumbnails/t_watch14.png", "women"),
("Watch 15", 200.00, "Lorem ipsum dolor sit amet, consectetur adipiscing elit. Etiam maximus purus et nisi faucibus, vitae ultricies tortor rhoncus. Cras nec nulla lectus.", "./assets/img/thumbnails/t_watch15.png", "men"),
("Watch 16", 25.99, "Lorem ipsum dolor sit amet, consectetur adipiscing elit. Etiam maximus purus et nisi faucibus, vitae ultricies tortor rhoncus. Cras nec nulla lectus.", "./assets/img/thumbnails/t_watch16.png", "men"),
("Watch 17", 73.50, "Lorem ipsum dolor sit amet, consectetur adipiscing elit. Etiam maximus purus et nisi faucibus, vitae ultricies tortor rhoncus. Cras nec nulla lectus.", "./assets/img/thumbnails/t_watch17.png", "men"),
("Watch 18", 400.00, "Lorem ipsum dolor sit amet, consectetur adipiscing elit. Etiam maximus purus et nisi faucibus, vitae ultricies tortor rhoncus. Cras nec nulla lectus.", "./assets/img/thumbnails/t_watch18.png", "women");
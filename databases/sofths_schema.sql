CREATE DATABASE IF NOT EXISTS sofths;

USE sofths;

CREATE TABLE users (
	mail VARCHAR(100) NOT NULL,
	name VARCHAR(40) NOT NULL,
	user VARCHAR(40) NOT NULL,
	password VARCHAR(32) NOT NULL,
	telephone VARCHAR(12) NOT NULL,
	PRIMARY KEY (mail)
);

CREATE TABLE categories (
	id_category INT NOT NULL AUTO_INCREMENT,
	category VARCHAR (70) NOT NULL,
	PRIMARY key (id_category)
) ;

CREATE TABLE products (
	id_product INT NOT NULL AUTO_INCREMENT,
	id_category INT NOT NULL,
	name_product VARCHAR (50) NOT NULL,
	image VARCHAR (250) NOT NULL,
	price DECIMAL (5,2) NOT NULL,
	description TEXT (500) NOT NULL,
	PRIMARY KEY (id_product),
	FOREIGN KEY (id_category) REFERENCES categories(id_category) ON UPDATE CASCADE ON DELETE CASCADE
) ;

INSERT INTO categories (id_category, category) VALUES 
(NULL, 'Pasteles'),
(NULL, 'Gelatinas'),
(NULL, 'CupCakes'),
(NULL, 'ChesseCakes');

INSERT INTO products (id_product, id_category, name_product, image, price, description) VALUES  
(NULL, '1', 'Pastel Selva Negra', 'http://localhost/images/products/image1.jpg', 30, 'Pastel de chocolate, relleno de frutas, decorado con crema de chocolate, selva negra y cereza'),
(NULL, '4', 'ChesseCake Zarzamora', 'http://localhost/images/products/image2.jpg', 30, 'ChesseCake de Zarzamora, base de galleta y decorado con mermelada de Zarzamora'),
(NULL, '4', 'ChesseCake Mango', 'http://localhost/images/products/image3.jpg', 30, 'ChesseCake de Mango, base de galleta y decorado con mermelada de Mango'),
(NULL, '3', 'CupCake Chocolate', 'http://localhost/images/products/image4.jpg', 30, 'CupCake de chocolate, capacillos de colores, '),
(NULL, '4', 'ChesseCake Fresa', 'http://localhost/images/products/image5.jpg', 30, 'ChesseCake de Fresa, base de galleta y decorado con mermelada de Fresa'),
(NULL, '2', 'Gelatina Vainilla', 'http://localhost/images/products/image6.jpg', 30, 'Deliciosa Gelatina de Vainilla de 5 Kilos'),
(NULL, '2', 'Gelatina Chocolate', 'http://localhost/images/products/image7.jpg', 30, 'Deliciosa Gelatina de Chocolate de 5 Kilos'),
(NULL, '4', 'ChesseCake Oreo', 'http://localhost/images/products/image8.jpg', 30, 'ChesseCake de Oreo, base de galleta y decorado con mermelada de Oreo'),
(NULL, '3', 'CupCake Canela', 'http://localhost/images/products/image9.jpg', 30, 'CupCake de Canela decorado con Crema batida sabor canela y trozos de canela'),
(NULL, '3', 'CupCake Vainilla', 'http://localhost/images/products/image10.jpg', 30, 'CupCake de Vainilla decorado con Crema batida sabor Vainilla'),
(NULL, '2', 'Gelatina de Mosaico', 'http://localhost/images/products/image11.jpg', 30, 'Gelatina de Mosaico'),
(NULL, '2', 'Gelatina de Fresa', 'http://localhost/images/products/image12.jpg', 30, 'Gelatina de fresa'),
(NULL, '3', 'CupCake Limón', 'http://localhost/images/products/image13.jpg', 30, 'CupCake de Limon, decorado con Crema Batida sabor Limon'),
(NULL, '1', 'Pastel Mil Hojas', 'http://localhost/images/products/image14.jpg', 30, 'Pastel de Ojaldre, relleno de frutas, decorado con Azucar Glass, '),
(NULL, '3', 'CupCake Moka', 'http://localhost/images/products/image15.jpg', 30, 'CupCake de Moka decorado con Crema Batida sabor Moka'),
(NULL, '3', 'CupCake Fresa', 'http://localhost/images/products/image16.jpg', 30, 'CupCake de Fresa decorado con Crema Batida sabor Fresa'),
(NULL, '2', 'Gelatina Frutas', 'http://localhost/images/products/image17.jpg', 30, 'Gelatina sabor Frtas'),
(NULL, '1', 'Pastel Tres Leches', 'http://localhost/images/products/image18.jpg', 30, 'Pastel de Tres Leches, relleno Muss de Fresa, decorado con Crema Pastelera Neutra y Frutas'),
(NULL, '1', 'Pastel Chocolate', 'http://localhost/images/products/image19.jpg', 30, 'Pastel de chocolate, relleno de frutas, decorado con crema de chocolate'),
(NULL, '4', 'ChesseCake Chocolate', 'http://localhost/images/products/image20.jpg', 30, 'ChesseCake de Chocolate, base de galleta y decorado con mermelada de Chocolate');

INSERT INTO users (mail, name, user ,password, telephone) VALUES
('jl0web0design@gmail.com', 'Giovanni', 'Gio', 'root', '7225141543'),
('paris.luvan_17@hotmail.com', 'Guadalupe', 'Lupita', 'root', '7227851593');
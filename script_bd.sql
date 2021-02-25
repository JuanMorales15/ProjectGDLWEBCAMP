SHOW DATABASES;

CREATE DATABASE GDLWEBCAMP CHARACTER SET utf8;
USE GDLWEBCAMP;

/*========We create the tables========*/
CREATE TABLE Categories(
	category_id TINYINT(10) UNSIGNED NOT NULL AUTO_INCREMENT PRIMARY KEY,
    category_name VARCHAR(50) NOT NULL,
    icon VARCHAR(15) NOT NULL
)ENGINE = InnoDB;

CREATE TABLE Guests(
	user_id TINYINT(10) UNSIGNED NOT NULL AUTO_INCREMENT PRIMARY KEY,
    user_name VARCHAR(30) NOT NULL,
    user_surname VARCHAR(30) NOT NULL,
	description TEXT(200) NOT NULL,
    url_picture VARCHAR(50) NOT NULL
)ENGINE = InnoDB;

CREATE TABLE Events(
	event_id TINYINT(10) UNSIGNED NOT NULL AUTO_INCREMENT PRIMARY KEY,
    event_name VARCHAR(50) NOT NULL,
    event_date DATE NOT NULL,
	event_time TIME NOT NULL,
	key_code VARCHAR(15) NOT NULL
)ENGINE = InnoDB;
    
/*========Define foreign keys========*/
	/*Table Events with Categories in 1:n*/
	ALTER TABLE Events ADD id_cat_event TINYINT(10) UNSIGNED NOT NULL AFTER event_time,
	ADD INDEX inx_id_cat (id_cat_event), 
	ADD CONSTRAINT fk_id_cat FOREIGN KEY (id_cat_event) REFERENCES Categories(category_id); 	
	
	/*Table Events with Categories in 1:n*/
	ALTER TABLE Events ADD id_user_event TINYINT(10) UNSIGNED NOT NULL AFTER id_cat_event,
	ADD INDEX inx_id_user (id_user_event), 
	ADD CONSTRAINT fk_id_user FOREIGN KEY (id_user_event) REFERENCES Guests(user_id); 	

/*========insert records into tables========*/

INSERT INTO Categories (category_name,icon) VALUES 
	('Talleres','fa-code'),
   	('Conferencias','fa-comments'),
  	('Seminarios','fa-university')
;

INSERT INTO Guests (user_name,user_surname,description,url_picture) VALUES 
	('Juan Carlos','Ruedas','Contrary to popular belief, Lorem Ipsum is not simply random text. It has roots in a piece of classical Latin literature from 45 BC, making it over 2000 years old. Richard McClintock.','picure1.jpg'),
	('Maria del Refugio','Morales','Contrary to popular belief, Lorem Ipsum is not simply random text. It has roots in a piece of classical Latin literature from 45 BC, making it over 2000 years old. Richard McClintock.','picure2.jpg'),
    ('Arizbeth Danae','Nuñez','Contrary to popular belief, Lorem Ipsum is not simply random text. It has roots in a piece of classical Latin literature from 45 BC, making it over 2000 years old. Richard McClintock.','picure3.jpg'),
    ('Miriam Yaqueline','Ruedas','Contrary to popular belief, Lorem Ipsum is not simply random text. It has roots in a piece of classical Latin literature from 45 BC, making it over 2000 years old. Richard McClintock.','picure4.jpg'),
	('Vallolet Miranda','Ruedas','Contrary to popular belief, Lorem Ipsum is not simply random text. It has roots in a piece of classical Latin literature from 45 BC, making it over 2000 years old. Richard McClintock.','picure5.jpg'),
	('Juan Manuel','Ruedas','Contrary to popular belief, Lorem Ipsum is not simply random text. It has roots in a piece of classical Latin literature from 45 BC, making it over 2000 years old. Richard McClintock.','picure6.jpg')
;	

INSERT INTO events (event_name, event_date, event_time, id_cat_event, id_user_event, key_code) VALUES ('Responsive Web Design', '2016-12-09', '10:00:00', '3', '1', 'taller_01');
INSERT INTO events (event_name, event_date, event_time, id_cat_event, id_user_event, key_code) VALUES ('Flexbox', '2016-12-09', '12:00:00', '3', '2', 'taller_02');
INSERT INTO events (event_name, event_date, event_time, id_cat_event, id_user_event, key_code) VALUES ('HTML5 y CSS3', '2016-12-09', '14:00:00', '3', '3', 'taller_03');
INSERT INTO events (event_name, event_date, event_time, id_cat_event, id_user_event, key_code) VALUES ('Drupal', '2016-12-09', '17:00:00', '3', '4', 'taller_04');
INSERT INTO events (event_name, event_date, event_time, id_cat_event, id_user_event, key_code) VALUES ('WordPress', '2016-12-09', '19:00:00', '3', '5', 'taller_05');

INSERT INTO events (event_name, event_date, event_time, id_cat_event, id_user_event, key_code) VALUES ('Como ser freelancer', '2016-12-09', '10:00:00', '2', '6', 'conf_01');
INSERT INTO events (event_name, event_date, event_time, id_cat_event, id_user_event, key_code) VALUES ('Tecnologías del Futuro', '2016-12-09', '17:00:00', '2', '1', 'conf_02');
INSERT INTO events (event_name, event_date, event_time, id_cat_event, id_user_event, key_code) VALUES ('Seguridad en la Web', '2016-12-09', '19:00:00', '2', '2', 'conf_03');

INSERT INTO events (event_name, event_date, event_time, id_cat_event, id_user_event, key_code) VALUES ('Diseño UI y UX para móviles', '2016-12-09', '10:00:00', '1', '6', 'sem_01');



INSERT INTO events (event_name, event_date, event_time, id_cat_event, id_user_event, key_code) VALUES ('AngularJS', '2016-12-10', '10:00:00', '3', '1', 'taller_06');
INSERT INTO events (event_name, event_date, event_time, id_cat_event, id_user_event, key_code) VALUES ('PHP y MySQL', '2016-12-10', '12:00:00', '3', '2', 'taller_07');
INSERT INTO events (event_name, event_date, event_time, id_cat_event, id_user_event, key_code) VALUES ('JavaScript Avanzado', '2016-12-10', '14:00:00', '3', '3', 'taller_08');
INSERT INTO events (event_name, event_date, event_time, id_cat_event, id_user_event, key_code) VALUES ('SEO en Google', '2016-12-10', '17:00:00', '3', '4', 'taller_09');
INSERT INTO events (event_name, event_date, event_time, id_cat_event, id_user_event, key_code) VALUES ('De Photoshop a HTML5 y CSS3', '2016-12-10', '19:00:00', '3', '5', 'taller_10');
INSERT INTO events (event_name, event_date, event_time, id_cat_event, id_user_event, key_code) VALUES ('PHP Intermedio y Avanzado', '2016-12-10', '21:00:00', '3', '6', 'taller_11');


INSERT INTO events (event_name, event_date, event_time, id_cat_event, id_user_event, key_code) VALUES ('Como crear una tienda online que venda millones', '2016-12-10', '10:00:00', '2', '6', 'conf_04');
INSERT INTO events (event_name, event_date, event_time, id_cat_event, id_user_event, key_code) VALUES ('Los mejores lugares para encontrar trabajo', '2016-12-10', '17:00:00', '2', '1', 'conf_05');
INSERT INTO events (event_name, event_date, event_time, id_cat_event, id_user_event, key_code) VALUES ('Pasos para crear un negocio rentable ', '2016-12-10', '19:00:00', '2', '2', 'conf_06');



INSERT INTO events (event_name, event_date, event_time, id_cat_event, id_user_event, key_code) VALUES ('Aprende a Programar en una mañana', '2016-12-10', '10:00:00', '1', '3', 'sem_02');
INSERT INTO events (event_name, event_date, event_time, id_cat_event, id_user_event, key_code) VALUES ('Diseño UI y UX para móviles', '2016-12-10', '17:00:00', '1', '5', 'sem_03');



INSERT INTO events (event_name, event_date, event_time, id_cat_event, id_user_event, key_code) VALUES ('Laravel', '2016-12-11', '10:00:00', '3', '1', 'taller_12');
INSERT INTO events (event_name, event_date, event_time, id_cat_event, id_user_event, key_code) VALUES ('Crea tu propia API', '2016-12-11', '12:00:00', '3', '2', 'taller_13');
INSERT INTO events (event_name, event_date, event_time, id_cat_event, id_user_event, key_code) VALUES ('JavaScript y jQuery', '2016-12-11', '14:00:00', '3', '3', 'taller_14');
INSERT INTO events (event_name, event_ate, event_time, id_cat_event, id_user_event, key_code) VALUES ('Creando Plantillas para WordPress', '2016-12-11', '17:00:00', '3', '4', 'taller_15');
INSERT INTO events (event_name, event_date, event_time, id_cat_event, id_user_event, key_code) VALUES ('Tiendas Virtuales en Magento', '2016-12-11', '19:00:00', '3', '5', 'taller_16');

INSERT INTO events (event_name, event_date, event_time, id_cat_event, id_user_event, key_code) VALUES ('Como hacer Marketing en línea', '2016-12-11', '10:00:00', '2', '6', 'conf_07');
INSERT INTO events (event_name, event_date, event_time, id_cat_event, id_user_event, key_code) VALUES ('¿Con que lenguaje debo empezar?', '2016-12-11', '17:00:00', '2', '2', 'conf_08');
INSERT INTO events (event_name, event_date, event_time, id_cat_event, id_user_event, key_code) VALUES ('Frameworks y librerias Open Source', '2016-12-11', '19:00:00', '2', '3', 'conf_09');


INSERT INTO events (event_name, event_date, event_time, id_cat_event, id_user_event, key_code) VALUES ('Creando una App en Android en una mañana', '2016-12-11', '10:00:00', '1', '4', 'sem_04');
INSERT INTO events (event_name, event_date, event_time, id_cat_event, id_user_event, key_code) VALUES ('Creando una App en iOS en una tarde', '2016-12-11', '17:00:00', '1', '1', 'sem_05');



SELECT * FROM categories;
SELECT * FROM guests;
SELECT * FROM events;


SELECT event_id,event_name, event_date, event_time, category_name, user_name, user_surname
From events AS E 
INNER JOIN categories AS C ON E.id_cat_event = C.category_id
INNER JOIN guests AS G ON E.id_user_event = G.user_id
GROUP BY event_date;
    
    
    

SELECT user_name AS Nombre, user_surname as Apellido, category_name AS Categoria, event_name AS Evento FROM
guests AS G INNER JOIN events AS E ON G.user_id=E.id_user_event
INNER JOIN categories AS C ON E.id_cat_event=C.category_id
WHERE G.user_name='Juan Carlos';






DROP DATABASE IF EXISTS crudApp;
CREATE database crudApp;
USE crudApp;
CREATE TABLE crud
		(
		id int(100) NOT NULL AUTO_INCREMENT,
		first_name varchar(100) NOT NULL,
		last_name varchar(100) NOT NULL,
        email varchar(100) NOT NULL,
        gender varchar(100) NOT NULL,
		PRIMARY KEY (id)
		);

INSERT INTO `crud`(`id`, `first_name`, `last_name`, `email`, `gender`) VALUES ('[value-1]','[value-2]','[value-3]','[value-4]','[value-5]')
INSERT INTO `crud`(`id`, `first_name`, `last_name`, `email`, `gender`) VALUES (NULL,'$first_name','$last_name','$email','$gender')






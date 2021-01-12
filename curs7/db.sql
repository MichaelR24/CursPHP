CREATE TABLE `mysite21`.`users` (
     `id` INT UNSIGNED NOT NULL AUTO_INCREMENT ,
     `nume` VARCHAR(50) NOT NULL , 
     `prenume` VARCHAR(50) NOT NULL , 
     `email` VARCHAR(100) NOT NULL , 
     `parola` VARCHAR(250) NOT NULL , 
     `data_adaugare` TIMESTAMP NOT NULL DEFAULT CURRENT_TIMESTAMP , 
     PRIMARY KEY (`id`)
     ) ENGINE = InnoDB;


     INSERT INTO `users` (`id`, `nume`, `prenume`, `email`, `parola`, `data_adaugare`) VALUES (NULL, 'Popescu', 'Ion', 'popescu.ion@yahoo.com', SHA1('123456'), CURRENT_TIMESTAMP);

     ALTER TABLE `mysite21`.`users` ADD UNIQUE `email` (`email`);
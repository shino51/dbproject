CREATE DATABASE 'cardealer';

CREATE USER 'gsm'@'%' IDENTIFIED BY 'password';
GRANT SELECT,INSERT,UPDATE,DELETE,CREATE,DROP ON cardealer.* TO 'gsm'@'%';
FLUSH PRIVILEGES;

use cardealer;

CREATE TABLE 'test' (
  'id' int(11) NOT NULL AUTO_INCREMENT,
  'name' varchar(45) NOT NULL,
  PRIMARY KEY ('id'),
  UNIQUE KEY 'id_UNIQUE' ('id')
);

INSERT INTO test (name) VALUES ('Shino');
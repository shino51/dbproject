CREATE DATABASE 'carinsurance';

CREATE USER 'gsm'@'%' IDENTIFIED BY 'password';
GRANT SELECT,INSERT,UPDATE,DELETE,CREATE,DROP ON carinsurance.* TO 'gsm'@'%';
FLUSH PRIVILEGES;

use carinsurance;

CREATE TABLE 'test' (
  'id' int(11) NOT NULL AUTO_INCREMENT,
  'name' varchar(45) NOT NULL,
  PRIMARY KEY ('id'),
  UNIQUE KEY 'id_UNIQUE' ('id')
);

INSERT INTO test (name) VALUES ('Shino');
DROP DATABASE IF EXISTS onsystemlog;

CREATE DATABASE IF NOT EXISTS onsystemlogic;

GRANT ALL PRIVILEGES ON onsystemlogic.* TO onsystemlogic@'localhost' IDENTIFIED BY 'onsystemlogic_1234';

FLUSH PRIVILEGES;

USE onsystemlogic;

CREATE TABLE IF NOT EXISTS subscribe
  (
    subscribe_id INT NOT NULL AUTO_INCREMENT,
    subscribe_email VARCHAR(256) NOT NULL,
    PRIMARY KEY (subscribe_id),
    UNIQUE INDEX (subscribe_email)
  );

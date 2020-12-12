--The movies simple sql file
--Database creation
DROP DATABASE if EXISTS Movies;
CREATE DATABASE Movies CHARACTER SET 'utf8';
USE Movies;

--Tables creation
CREATE TABLE movie (
    id SMALLINT UNSIGNED NOT NULL AUTO_INCREMENT,
    title VARCHAR(20) NOT NULL,
    description TEXT,
    movieDate DATETIME NOT NULL,
    moviesUrl TEXT NOT NULL,
    PRIMARY KEY(id)
)
ENGINE=INNODB;

USE softuni;

CREATE TABLE people
(
    id        INT AUTO_INCREMENT PRIMARY KEY,
    name      VARCHAR(200)    NOT NULL,
    picture   VARBINARY(2000) DEFAULT 0,
    height    DECIMAL(5, 2)   DEFAULT 0,
    weight    DECIMAL(5, 2)   DEFAULT 0,
    gender    ENUM ('f', 'm') NOT NULL,
    birthdate DATE            NOT NULL,
    biography LONGTEXT        DEFAULT NULL

);

INSERT INTO people(name, picture, height, weight, gender, birthdate, biography)
VALUES ('George Doychev', 0, 1.76, 80, 'm', '1976-09-26', NULL),
       ('Miroslav Doychev', 0, 1.43, 40, 'm', '2008-12-18', NULL),
       ('Martin Doychev', 0, 1.90, 78, 'm', '2003-12-15', NULL),
       ('Yordanka Petkowa', 0, 1.55, 50, 'f', '1980-06-29', NULL),
       ('Georgi Cholakov', 0, 1.80, 78, 'm', '1977-10-31', NULL);
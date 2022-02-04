CREATE DATABASE IF NOT EXISTS php_course;

USE php_course;

CREATE TABLE students
(
    id                       INT AUTO_INCREMENT NOT NULL PRIMARY KEY,
    first_name               VARCHAR(100)       NOT NULL,
    last_name                VARCHAR(255)       NOT NULL,
    student_number           INT                NOT NULL UNIQUE,
    phone                    INT        DEFAULT 0,
    home_address             VARCHAR(255),
    date_of_record           DATETIME NOT NULL,
    date_of_last_data_change DATETIME,
    is_active                BOOLEAN,
    motivation_letter        MEDIUMTEXT DEFAULT 0,
    notes                    TINYTEXT   DEFAULT 0

);

INSERT INTO students (first_name, last_name, student_number, phone, home_address, date_of_record, date_of_last_data_change,
                      is_active, motivation_letter, notes)
VALUES ('George', 'Doychev', 957, 0899516468, 'Pomorie, Geo Milew str', now(), '2020-06-17 15:44:23',TRUE, 'Good student', 'sample notes'),
       ('Ivan', 'Donev', 958, 0897516168, 'Burgas, Ivan Vazow str', now(), '2020-06-17 15:44:23',TRUE, 'Bad student', 'sample notes'),
       ('Martin', 'Doychev', 959, 0899516568, 'Pomorie, Geo Milew str', now(), '2020-06-16 21:44:23',TRUE, 'Good student', 'sample notes'),
       ('Stoqn', 'Popov', 960, 0895516668, 'Burgas, Ivan Vazow str', now(), '2020-05-17 18:44:23',TRUE, 'Bad student', 'sample notes'),
       ('George', 'Kalev', 961, 0899516268, 'Pomorie, Geo Milew str', now(), '2020-04-17 15:20:23',TRUE, 'Good student', 'sample notes');

UPDATE students
SET phone = 0888516892
WHERE id = 2
LIMIT 1;

UPDATE students
SET notes = 'simple SQL'
WHERE id = 2
LIMIT 1;

DELETE from students
WHERE id = 2
LIMIT 1;

UPDATE students
SET home_address = NULL
WHERE id = 3
LIMIT 1;

DELETE from students
WHERE home_address IS NULL
LIMIT 1;




# TRUNCATE students;
ALTER TABLE softuni.minions
    MODIFY age INT DEFAULT 0;

CREATE TABLE towns
(
    id   INT AUTO_INCREMENT
        PRIMARY KEY,
    name VARCHAR(100) NOT NULL
);
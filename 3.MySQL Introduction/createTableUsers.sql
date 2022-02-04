USE softuni;

CREATE TABLE users
(
    id              INT AUTO_INCREMENT PRIMARY KEY,
    username        VARCHAR(30) UNIQUE NOT NULL,
    password        VARCHAR(26)        NOT NULL,
    profile_picture VARBINARY(100) DEFAULT 0,
    last_login_time TIME,
    is_deleted      BOOL
);

INSERT INTO users(username, password, profile_picture, last_login_time, is_deleted)
VALUES ('Joro', '14d6', NULL, '12:50:16', FALSE),
       ('Miro', '54d6', NULL, '12:51:16', TRUE),
       ('Marti', '514d6', NULL, '12:52:16', FALSE),
       ('Dani', '147df6', NULL, '12:53:16', TRUE),
       ('Gogo', '14dh6', NULL, '12:57:16', FALSE);
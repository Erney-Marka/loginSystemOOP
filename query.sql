CREATE TABLE users (
	users_id INT(11) NOT NULL AUTO_INCREMENT,
    users_username VARCHAR(64) NOT NULL,
    users_pwd VARCHAR(255) NOT NULL,
    users_email VARCHAR(64) NOT NULL,
    PRIMARY KEY (users_id)
);
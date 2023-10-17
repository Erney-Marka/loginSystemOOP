CREATE TABLE users (
	users_id INT(11) NOT NULL AUTO_INCREMENT,
    users_username VARCHAR(64) NOT NULL,
    users_pwd VARCHAR(255) NOT NULL,
    users_email VARCHAR(64) NOT NULL,
    PRIMARY KEY (users_id)
);

CREATE TABLE profiles (
	profiles_id INT(11) NOT NULL AUTO_INCREMENT,
    profiles_about TEXT NOT NULL,
    profiles_introtitle TEXT NOT NULL,
    profiles_introtext TEXT NOT NULL,
    users_id INT(11),
    PRIMARY KEY (profiles_id),
    FOREIGN KEY (users_id) REFERENCES users(users_id)
);
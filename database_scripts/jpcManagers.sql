
-- Create managers table for login information
CREATE TABLE jpcManagers (
    jpcManagerID   INT(11)       NOT NULL   AUTO_INCREMENT,
    emailAddress   VARCHAR(255)  NOT NULL   UNIQUE,
    password       VARCHAR(64)   NOT NULL,
    pronouns       VARCHAR(60)   NOT NULL,
    firstName      VARCHAR(60)   NOT NULL,
    lastName       VARCHAR(60)   NOT NULL,
    dateCreated    DATETIME      NOT NULL,
    PRIMARY KEY (jpcManagerID)
);

-- Insert manager login data

-- Manager #1 - Yukinobu Tatsu
INSERT INTO jpcManagers (emailAddress, password, pronouns, firstName, lastName, dateCreated)
VALUES ('YT@jpc.com', SHA2('T@tsu1', 256), 'He/Him', 'Yukinobu', 'Tatsu', NOW());

-- Manager #2 - Kohei Horikoshi
INSERT INTO jpcManagers (emailAddress, password, pronouns, firstName, lastName, dateCreated)
VALUES ('KH@jpc.com', SHA2('K0hei2', 256), 'He/Him', 'Kohei', 'Horikoshi', NOW());

-- Manager #3 - Takehiko Inoue
INSERT INTO jpcManagers (emailAddress, password, pronouns, firstName, lastName, dateCreated)
VALUES ('TI@jpc.com', SHA2('T@kehiko3',256), 'He/Him', 'Takehiko', 'Inoue', NOW());

-- Verify and view jpcManagers table/creds
SELECT * FROM jpcManagers;


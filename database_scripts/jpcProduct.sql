CREATE TABLE jpcProducts (
    jpcProductID           INT(11)         NOT NULL,
    jpcProductCode         VARCHAR(10)     NOT NULL    UNIQUE,
    jpcProductName         VARCHAR(64)     NOT NULL,
    jpcProductDescription  TEXT            NOT NULL,
    jpcProductYear         INT(11)         NOT NULL,
    jpcCategoryID          INT(11)         NOT NULL,
    jpcWholesalePrice      DECIMAL(10, 2)  NOT NULL,
    jpcListPrice           DECIMAL(10, 2)  NOT NULL,
    DateCreated            DATETIME        NOT NULL,
    PRIMARY KEY (jpcProductID)
);

SELECT * FROM jpcProducts;
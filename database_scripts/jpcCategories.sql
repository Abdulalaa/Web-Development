CREATE TABLE jpcCategories (
    jpcCategoryID      INT(11)        NOT NULL,
    jpcCategoryCode    VARCHAR(64)    NOT NULL    UNIQUE,
    jpcCategoryName    VARCHAR(64)    NOT NULL,
    jpcCategoryDesc    TEXT           NOT NULL,
    DateCreated        DATETIME       NOT NULL,
    PRIMARY KEY (jpcCategoryID)
);

SELECT * FROM jpcCategories;

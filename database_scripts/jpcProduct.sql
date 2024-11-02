-- Abdullah Abdallah, October 18, IT202, Phase 2, aaa@njit.edu

-- Create a new table named 'jpcProducts' to store product information
CREATE TABLE jpcProducts (
    jpcProductID           INT(11)         NOT NULL,       -- Unique identifier for each product
    jpcProductCode         VARCHAR(10)     NOT NULL UNIQUE,-- Unique code for the product
    jpcProductName         VARCHAR(64)     NOT NULL,       -- Name of the product
    jpcProductDescription  TEXT            NOT NULL,       -- Detailed description of the product
    jpcProductYear         INT(11)         NOT NULL,       -- Year the product was made or released
    jpcCategoryID          INT(11)         NOT NULL,       -- Foreign key to link with jpcCategories table
    jpcWholesalePrice      DECIMAL(10, 2)  NOT NULL,       -- Wholesale price of the product
    jpcListPrice           DECIMAL(10, 2)  NOT NULL,       -- List price (retail price) of the product
    DateCreated            DATETIME        NOT NULL,       -- Timestamp of when the product was added to the database
    PRIMARY KEY (jpcProductID)                             -- Set jpcProductID as the primary key for the table
);

-- Select all records from the jpcProducts table
-- This command will display all products after they are added to the table
SELECT * FROM jpcProducts;

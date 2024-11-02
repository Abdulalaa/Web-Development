-- Abdullah Abdallah, October 18, IT202, Phase 2, aaa@njit.edu
-- Table for Categories

-- Create a new table named 'jpcCategories' to store category information
CREATE TABLE jpcCategories (
    jpcCategoryID      INT(11)        NOT NULL,   -- Unique identifier for each category
    jpcCategoryCode    VARCHAR(64)    NOT NULL    UNIQUE,  -- Unique code for the category (e.g., 'CB' for Comic Books)
    jpcCategoryName    VARCHAR(64)    NOT NULL,   -- Name of the category (e.g., 'Comic Books')
    jpcCategoryDesc    TEXT           NOT NULL,   -- Detailed description of the category
    DateCreated        DATETIME       NOT NULL,   -- Timestamp of when the category was created
    PRIMARY KEY (jpcCategoryID)  -- Set jpcCategoryID as the primary key for the table
);

-- Select all records from the jpcCategories table
-- This command will display all categories after they are added to the table
SELECT * FROM jpcCategories;

 
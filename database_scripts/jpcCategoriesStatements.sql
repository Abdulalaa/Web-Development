--  Abdullah Abdallah, October 18, IT202, Phase 2, aaa@njit.edu

-- This script inserts category data into the jpcCategories table

-- Note: Category IDs are incremented by 100

-- Insert Vintage Vinyl Records category
INSERT INTO jpcCategories (jpcCategoryID, jpcCategoryCode, jpcCategoryName, jpcCategoryDesc, DateCreated) VALUES (
    100, -- Category ID
    'VVR', -- Category Code
    'Vintage Vinyl Records', -- Category Name
    'Rare vintage vinyl records from Japan. Includes a variety of artists and genres.', -- Category Description
    NOW() -- Current timestamp
);

-- Insert Comic Books category
INSERT INTO jpcCategories (jpcCategoryID, jpcCategoryCode, jpcCategoryName, jpcCategoryDesc, DateCreated) VALUES (
    101, -- Category ID
    'CB', -- Category Code
    'Comic Books', -- Category Name
    'A wide selection of comic books and manga box sets from Japan. A variety of publishers and genres included.', -- Category Description
    NOW() -- Current timestamp
);

-- Insert Antique Coins category
INSERT INTO jpcCategories (jpcCategoryID, jpcCategoryCode, jpcCategoryName, jpcCategoryDesc, DateCreated) VALUES (
    102, -- Category ID
    'AC', -- Category Code
    'Antique Coins', -- Category Name
    'Rare and collectible antique coins from Japan. Includes a variety of denominations and time periods', -- Category Description
    NOW() -- Current timestamp
);

-- Insert Stamp Collections category
INSERT INTO jpcCategories (jpcCategoryID, jpcCategoryCode, jpcCategoryName, jpcCategoryDesc, DateCreated) VALUES (
    103, -- Category ID
    'SC', -- Category Code
    'Stamp Collections', -- Category Name
    'Rare and collectible stamp collections from Japan. Includes a variety of denominations and time periods', -- Category Description
    NOW() -- Current timestamp
);

-- Insert Action Figures category
INSERT INTO jpcCategories (jpcCategoryID, jpcCategoryCode, jpcCategoryName, jpcCategoryDesc, DateCreated) VALUES (
    104, -- Category ID
    'AF', -- Category Code
    'Action Figures', -- Category Name
    'A strong variety of Japanese Anime action figures. Action figures from multiple sources and shows', -- Category Description
    NOW() -- Current timestamp
);

-- Display all records from the jpcCategories table
SELECT * FROM jpcCategories;

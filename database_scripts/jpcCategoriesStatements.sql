--  Abdullah Abdallah, October 18, IT202, Phase 2, aaa@njit.edu
--Increment Category ID's by 100

INSERT INTO jpcCategories (jpcCategoryID, jpcCategoryCode, jpcCategoryName, jpcCategoryDesc, DateCreated) VALUES (
    100,
    'VVR',
    'Vintage Vinyl Records',
    'Rare vintage vinyl records from Japan. Includes a variety of artists and genres.',
    NOW()
);

INSERT INTO jpcCategories (jpcCategoryID, jpcCategoryCode, jpcCategoryName, jpcCategoryDesc, DateCreated) VALUES (
    101,
    'CB',
    'Comic Books',
    'A wide selection of comic books and manga box sets from Japan. A variety of publishers and genres included.',
    NOW()
);

INSERT INTO jpcCategories (jpcCategoryID, jpcCategoryCode, jpcCategoryName, jpcCategoryDesc, DateCreated) VALUES (
    102,
    'AC',
    'Antique Coins',
    'Rare and collectible antique coins from Japan. Includes a variety of denominations and time periods',
    NOW()
);

INSERT INTO jpcCategories (jpcCategoryID, jpcCategoryCode, jpcCategoryName, jpcCategoryDesc, DateCreated) VALUES (
    103,
    'SC',
    'Stamp Collections',
    'Rare and collectible stamp collections from Japan. Includes a variety of denominations and time periods',
    NOW()
);

INSERT INTO jpcCategories (jpcCategoryID, jpcCategoryCode, jpcCategoryName, jpcCategoryDesc, DateCreated) VALUES (
    104,
    'AF',
    'Action Figures',
    'A strong variety of Japanese Anime action figures. Action figures from multiple sources and shows',
    NOW()
);

SELECT * FROM jpcCategories;
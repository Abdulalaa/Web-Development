-- Abdullah Abdallah, October 18, IT202, Phase 2, aaa@njit.edu
-- Inserting products into jpcProducts
-- productID start with 1000

-- For Vintage Vinyl Records (CategoryID 100)
INSERT INTO jpcProducts (jpcProductID, jpcProductCode, jpcProductName, jpcProductDescription, jpcProductYear, jpcCategoryID, jpcWholesalePrice, jpcListPrice, DateCreated) VALUES 
(1000, 'VVR001', 'Tokyo Jazz Classics', 'A collection of classic jazz records from Tokyo, featuring various legendary artists.', 1990, 100, 30.00, 45.00, NOW()),
(1001, 'VVR002', 'Japanese Rock Hits', 'A compilation of the best rock music from Japan, including various popular bands.', 1985, 100, 25.00, 40.00, NOW()),
(1002, 'VVR003', 'Anime Soundtrack Vinyl', 'Limited edition vinyl of famous anime soundtracks, perfect for any anime lover.', 2021, 100, 20.00, 35.00, NOW());

-- For Manga Box Sets (CategoryID 101)
INSERT INTO jpcProducts (jpcProductID, jpcProductCode, jpcProductName, jpcProductDescription, jpcProductYear, jpcCategoryID, jpcWholesalePrice, jpcListPrice, DateCreated) VALUES 
(2000, 'MNG001', 'Naruto Complete Box Set', 'All volumes of Naruto in a special collector’s box set, perfect for fans.', 2015, 101, 200.00, 300.00, NOW()),
(2001, 'MNG002', 'Dandadan Complete Box Set', 'All volumes of Dandadan in a collector’s box set, packed with adventure.', 2022, 101, 180.00, 270.00, NOW()),
(2002, 'MNG003', 'My Hero Academia Complete Box Set', 'The complete My Hero Academia series in a beautiful box set.', 2021, 101, 210.00, 320.00, NOW()),
(2003, 'MNG004', 'Demon Slayer Complete Box Set', 'All volumes of Demon Slayer bundled together for a complete collection.', 2022, 101, 220.00, 330.00, NOW()),
(2004, 'MNG005', 'One Piece Complete Box Set', 'All volumes of One Piece in a collector’s box set, ideal for adventure lovers.', 2023, 101, 250.00, 400.00, NOW()),
(2005, 'MNG006', 'Attack on Titan Complete Box Set', 'All volumes of Attack on Titan in a comprehensive box set.', 2022, 101, 240.00, 380.00, NOW()),
(2006, 'MNG007', 'The Promised Neverland Complete Box Set', 'A thrilling collection of The Promised Neverland in a box set.', 2019, 101, 195.00, 290.00, NOW()),
(2007, 'MNG008', 'Tokyo Ghoul Complete Box Set', 'Complete collection of Tokyo Ghoul in a box set, perfect for horror fans.', 2021, 101, 210.00, 320.00, NOW());

-- For Antique Coins (CategoryID 102)
INSERT INTO jpcProducts (jpcProductID, jpcProductCode, jpcProductName, jpcProductDescription, jpcProductYear, jpcCategoryID, jpcWholesalePrice, jpcListPrice, DateCreated) VALUES 
(3000, 'AC001', 'Edo Period Silver Coin', 'A rare silver coin from the Edo period, featuring intricate designs.', 1700, 102, 50.00, 75.00, NOW()),
(3001, 'AC002', 'Meiji Era Gold Coin', 'A collectible gold coin from the Meiji era, perfect for collectors.', 1880, 102, 100.00, 150.00, NOW()),
(3002, 'AC003', 'Taisho Period Bronze Coin', 'A bronze coin from the Taisho period with historical significance.', 1920, 102, 30.00, 45.00, NOW());

-- For Stamp Collections (CategoryID 103)
INSERT INTO jpcProducts (jpcProductID, jpcProductCode, jpcProductName, jpcProductDescription, jpcProductYear, jpcCategoryID, jpcWholesalePrice, jpcListPrice, DateCreated) VALUES 
(4000, 'SC001', 'Vintage Japanese Stamp Set', 'A collection of vintage Japanese stamps, ideal for collectors.', 1950, 103, 15.00, 25.00, NOW()),
(4001, 'SC002', 'Anime Themed Stamps', 'A unique set of stamps featuring popular anime characters.', 2020, 103, 10.00, 20.00, NOW()),
(4002, 'SC003', 'Post-War Stamp Collection', 'Stamps from Japan’s post-war period, showcasing historical events.', 1946, 103, 20.00, 30.00, NOW());

-- For Action Figures (CategoryID 104)
INSERT INTO jpcProducts (jpcProductID, jpcProductCode, jpcProductName, jpcProductDescription, jpcProductYear, jpcCategoryID, jpcWholesalePrice, jpcListPrice, DateCreated) VALUES 
(5000, 'AF001', 'Orakun Action Figure', 'High-quality action figure of Orakun from Dandadan, capturing his unique features.', 2023, 104, 25.00, 40.00, NOW()),
(5001, 'AF002', 'Momo Action Figure', 'Detailed action figure of Momo from Dandadan, perfect for collectors.', 2023, 104, 25.00, 40.00, NOW()),
(5002, 'AF003', 'Gohan Action Figure', 'Dynamic figure of Gohan in his training outfit from Dragon Ball.', 2021, 104, 30.00, 50.00, NOW()),
(5003, 'AF004', 'Rengoku Action Figure', 'Collectible figure of Kyojuro Rengoku from Demon Slayer, showcasing his fierce expression.', 2022, 104, 28.00, 45.00, NOW()),
(5004, 'AF005', 'Eren Yeager Action Figure', 'Striking figure of Eren Yeager from Attack on Titan, capturing his determination.', 2022, 104, 28.00, 45.00, NOW());

SELECT * FROM jpcProducts;


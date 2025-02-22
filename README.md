# ShogunShop - Ecommerce Store
## A CRUD-based e-commerce website project showcasing product and category management, secure user authentication, and a modular PHP code structure. Note: This project is for demonstration and learning purposes

```plaintext
ShogunShop-Ecommerce-Website/
├── database_scripts/
│   ├── jpcCategories.sql
│   ├── jpcCategoriesExport.sql
│   ├── jpcCategoriesStatements.sql
│   ├── jpcManagers.sql
│   ├── jpcProduct.sql
│   ├── jpcProductsExport.sql
│   ├── jpcProductsStatements.sql
│   └── website/
│       └── README.md
├── website/
│   ├── images/
│   ├── addJpcCategory.php
│   ├── addJpcProduct.php
│   ├── aside.php
│   ├── changeJpcCategory.php
│   ├── changeJpcProduct.php
│   ├── displayJpcProduct.php
│   ├── jpcCategories.txt
│   ├── jpcCategory.php
│   ├── jpcDatabase.php
│   ├── jpcFooter.php
│   ├── jpcHeader.php
│   ├── jpcIndex.php
│   ├── jpcMain.php
│   ├── jpcNav.php
│   ├── jpcProduct.php
│   ├── jpcValidate.php
│   ├── jpc_styles.css
│   ├── listJpcProduct.php
│   ├── newJpcCategory.php
│   ├── newJpcProduct.php
│   ├── realtime.php
│   ├── removeJpcCategory.php
│   ├── removeJpcProduct.php
│   ├── updateJpcCategory.php
│   ├── updateJpcProduct.php
│   └── README.md
└── README.md

Overview

ShogunShop is a PHP, SQL, JS, CSS, & HTML-based e-commerce platform built around the core principles of Create, Read, Update, and Delete (CRUD). The website demonstrates how to manage products and categories in a structured, modular way. It also includes user authentication elements and highlights how PHP scripts can be separated into logical components (header, footer, navigation, and validation) for better maintainability.

Key Features
	•	CRUD Operations: Create, Read, Update, and Delete functionality for both products and categories.
	•	Modular Architecture: Separation of layout components (jpcHeader.php, jpcFooter.php, jpcNav.php) and database logic (jpcDatabase.php).
	•	Real-time Updates: The realtime.php script may offer dynamic or AJAX-based features for an improved user experience.
	•	Product Images: The images/ folder can be used to store and manage product photos.

Security Features:
 	1.	Input Sanitization
	•	The file jpcValidate.php validates authorized administrator accounts and logins
	2.	Prepared Statements
	•	Implemented SQL queries use prepared statements to further mitigate SQL injection risks.
	•	The SQL files illustrate how queries can be structured securely.
	3.	User Authentication
	•	Basic login/logout flow to restrict access to CRUD operations.
	•	Session management to keep track of logged-in users.
	4.	Validation
	•	Client-side (JavaScript) validation is added to improve user experience, while server-side (PHP) validation remains the authoritative layer of security.

# 📌 UMIS – PHP + MYSQL PROJECT

UMIS (University Management Information System) is a simple PHP project connected with a MySQL database, built and tested locally using **WAMP server**.


## 🚀 FEATURES
- PHP-based dynamic pages
- MySQL database integration
- User-friendly interface
- Easy setup on local server


## 🛠️ REQUIREMENTS
- [WAMP](https://www.wampserver.com/) or [XAMPP](https://www.apachefriends.org/)
- PHP 7.4+ (or higher)
- MySQL / phpMyAdmin


## ⚙️ SETUP INSTRUCTIONS

## 1. Clone the repository
   ```bash
   git clone https://github.com/swathi-dev24/UMIS.git

Or download as ZIP and extract into:
  C:/wamp64/www/UMIS


## 2. Import the Database
  i)  Open phpMyAdmin
  ii) Create a new database named:
        UMIS
iii)  Import the SQL file from:
        db/UMIS.sql

        
## 3. Update Database Configuration
      Edit config.php (or db.php) with your local credentials:
        <?php
            $servername = "localhost";
            $username   = "root";   // default WAMP user
            $password   = "";       // default WAMP password is empty
            $dbname     = "UMIS";
        ?>

## 4. Run the Project
     i) Start WAMP server
    ii) Open browser → http://localhost/UMIS/


## FOLDER STRUCTURE
    UMIS/
│── index.php
│── config.php
│── /assets
│   ├── css/
│   ├── js/
│   └── img/
│── /db
│   └── UMIS.sql
│── /includes
│── /pages


## 📌 NOTES
- This project is meant to run locally with WAMP/XAMPP.
- Make sure the database name is `UMIS` in phpMyAdmin.
- Default MySQL username: `root` and password: (leave empty).
- Do not try to run this on GitHub Pages (PHP is not supported).
- If you face connection issues, check `config.php` for correct DB credentials.




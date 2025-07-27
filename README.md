# Task2-Website-and-application-programming
# 🧑‍💻 My Users Web Application

This is a simple web application built using PHP, MySQL, HTML, and CSS. It allows users to input a name and age, store the data in a database, and toggle the status of each record between 0 and 1.

## 📌 Features

- ✅ Add a user by name and age using a web form.
- 📄 Display all users in a dynamic table.
- 🔁 Toggle user status instantly between 0 and 1.
- 🛠️ Uses MySQL database for persistent storage.
- 🖥️ Fully functional via localhost using XAMPP or similar server.

## 🗃️ Database Setup

1. Open phpMyAdmin.
2. Import the provided file: my_users_separated.sql.
3. This will:
   - Create the database my_users.
   - Create the table users.
   - Insert sample data (`John`, Sarah, `Michael`).

## 📂 Files Description

- index.php: Main web interface to submit, view, and toggle users.
- my_users_separated.sql: SQL file to create the database and table with sample data.
- *(Optional enhancement)* db.php: Could be added to separate DB connection logic.

## 🧪 Usage Instructions

1. Place index.php into your htdocs folder (if using XAMPP).
2. Start Apache and MySQL via XAMPP.
3. Visit http://localhost/inex.php in your browser.
4. Use the form to add users.
5. Click "Toggle" to switch user status between 0 and 1.

## ✅ Requirements

- PHP 7.x or 8.x
- MySQL / phpMyAdmin
- Web Server (e.g., Apache with XAMPP, WAMP)

## 📌 Example

| ID | Name    | Age | Status | Action |
|----|---------|-----|--------|--------|
| 1  | John    | 25  | 0      | Toggle |
| 2  | Sarah   | 30  | 1      | Toggle |
| 3  | Michael | 22  | 0      | Toggle |

## 📄 License

This project is provided for educational purposes and can be freely modified.

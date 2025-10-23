# FULL-STACK_DEV_MOVIE
# 🎬 Movies Database Project

This project demonstrates how to create and display a simple **MySQL database table** using **PHP** and **HTML**.  
It connects to a MySQL database, retrieves movie records, and displays them in a formatted HTML table.

---

## 🧱 Features
- MySQL database connection using PHP (`mysqli`)
- Displays all movies from the `movies` table
- Styled HTML table layout
- Easily expandable for adding/editing/deleting records

---

## 🗄️ Database Details

**Table Name:** `movies`

| Field Name       | Data Type      | Description                |
|------------------|----------------|-----------------------------|
| `movie_id`       | `INT`          | Primary key                |
| `movie_name`     | `VARCHAR(100)` | Movie title                |
| `genre`          | `VARCHAR(20)`  | Movie genre                |
| `price`          | `FLOAT`        | Movie price (£)            |
| `date_of_release`| `DATE`         | Release date               |

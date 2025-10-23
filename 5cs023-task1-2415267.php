<?php
// --- Connect to the MySQL database ---
$mysqli = new mysqli("localhost", "2415267", "Bhubindra90@90@@", "db2415267");

// --- Check connection ---
if ($mysqli->connect_errno) {
    echo "Failed to connect to MySQL: " . $mysqli->connect_error;
    exit();
}

// --- Query to get all movies ---
$sql = "SELECT * FROM movies";
$result = $mysqli->query($sql);
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Movies List</title>
    <style>
        body {
            font-family: Arial, sans-serif;
            background: #f4f4f4;
            padding: 40px;
        }
        table {
            width: 70%;
            margin: auto;
            border-collapse: collapse;
            background: #fff;
        }
        th, td {
            padding: 12px;
            border: 1px solid #ccc;
            text-align: center;
        }
        th {
            background: #0078D7;
            color: white;
        }
        h1 {
            text-align: center;
            color: #333;
        }
    </style>
</head>
<body>
    <h1>Movies List</h1>
    <table>
        <tr>
            <th>Movie ID</th>
            <th>Movie Name</th>
            <th>Genre</th>
            <th>Price (£)</th>
            <th>Date of Release</th>
        </tr>

        <?php
        // --- Display the movies if there are any ---
        if ($result->num_rows > 0) {
            while($row = $result->fetch_assoc()) {
                echo "<tr>
                        <td>{$row['movie_id']}</td>
                        <td>{$row['movie_name']}</td>
                        <td>{$row['genre']}</td>
                        <td>{$row['price']}</td>
                        <td>{$row['date_of_release']}</td>
                      </tr>";
            }
        } else {
            echo "<tr><td colspan='5'>No movies found.</td></tr>";
        }

        // --- Close connection ---
        $mysqli->close();
        ?>
    </table>
</body>
</html>

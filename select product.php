<?php
$database_name = "online shop";
$server_name = "localhost";
$user_name = "root";
$password = ""; // Replace with your actual password if applicable

$conn = new mysqli($server_name, $user_name, $password, $database_name);

if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}

// Retrieve products from the database
$sql = "SELECT * FROM products";
$result = $conn->query($sql);

if ($result->num_rows > 0) {
    echo "<table>";
    echo "<tr>";
    echo "<th>Product Name</th>";
    echo "<th>File Name</th>";
    echo "<th>Description</th>";
    echo "<th>Price</th>";
    echo "<th>Quantity</th>";
    echo "<th>Date</th>";
    echo "<th>Status</th>";
    echo "</tr>";

    while ($row = $result->fetch_assoc()) {
        echo "<tr>";
        echo "<td>" . $row["product_name"] . "</td>";
        echo "<td>" . $row["file_name"] . "</td>";
        echo "<td>" . $row["description"] . "</td>";
        echo "<td>" . $row["price"] . "</td>";
        echo "<td>" . $row["quantity"] . "</td>";
        echo "<td>" . $row["date"] . "</td>";
        echo "<td>" . $row["status"] . "</td>";
        echo "</tr>";
    }

    echo "</table>";
} else {
    echo "No products found";
}

$conn->close();
?>
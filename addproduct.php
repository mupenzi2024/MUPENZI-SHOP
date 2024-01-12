<?php 
$database_name = "online shop";
$server_name = "localhost";
$user_name = "root";
$password = ""; // Replace with your actual password if applicable

$conn = new mysqli($server_name, $user_name, $password, $database_name);

if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}

if (isset($_POST["submit"])) {
    $product_ID = $_POST['id'];
    $product_name = $_POST['pname'];
    $product_category = $_POST['scategory'];
    $file_name = $_FILES['fname']['name'];
    $product_description = $_POST['dmessage'];
    $product_price = $_POST['pprice'];
    $available_quantity = $_POST['qquantity'];
    $date = $_POST['eevent-date'];
    $status = $_POST['sstatus'];

    // Prepare the SQL statement using a prepared statement
    $sql = "INSERT INTO products (product_ID, product_name, product_category, file_name, description, price, quantity, date, status)
            VALUES (?, ?, ?, ?, ?, ?, ?, ?, ?)";
    $stmt = $conn->prepare($sql);
    $stmt->bind_param("issssssss", $product_ID, $product_name, $product_category, $file_name, $product_description, $product_price, $available_quantity, $date, $status);

    if ($stmt->execute()) {
        
    } else {
        echo "Error: " . $stmt->error;
    }
    $stmt->close();
    $conn->close();
}
?>
<?php
     $message = "Product added successfully."; // Set the success message
     echo $message;
                
                ?>
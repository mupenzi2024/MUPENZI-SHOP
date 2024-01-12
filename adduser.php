<?php
$database_name = "online shop";
$server_name = "localhost";
$user_name = "root";
$password = ""; // Add your database password here if applicable

$conn = new mysqli($server_name, $user_name, $password, $database_name);

if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}

if (isset($_POST["add"])) {
    $user_ID = $_POST["user_id"];
    $user_name = $_POST["cname"];
    $file_name = $_POST["fname"];
    $phone_number = $_POST['user_phone_number'];
    $district = $_POST['user_district'];
    $sector = $_POST['user_sector'];
    $cell = $_POST['user_cell'];
    $village = $_POST['user_village'];
    $email = $_POST['user_email'];
    $gender = $_POST['user_gender'];
    $password = $_POST['user_password'];

    // Prepare the SQL statement using a prepared statement
    $sql = "INSERT INTO users (user_id, user_name, file_name, phone_number, district, sector, cell, village, email, gender, password)
            VALUES (?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?)";
    $stmt = $conn->prepare($sql);
    $stmt->bind_param("issssssssss", $user_ID, $user_name, $file_name, $phone_number, $district, $sector, $cell, $village, $email, $gender, $password);

    if ($stmt->execute()) {
        
    } else {
        echo "Error: " . $stmt->error;
    }

    $stmt->close();
    $conn->close();
}
?>
<?php
     $message = "user added successfully."; // Set the success message
     echo $message;
                
                ?>
<?php
$database_name = "online shop";
$server_name = "localhost";
$user_name = "root";
$password = ""; // Add your database password here if applicable

$conn = new mysqli($server_name, $user_name, $password, $database_name);

if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $client_ID = $_POST["cclient_id"];
    $client_name = $_POST["cname"];
    $phone_number = $_POST['cclient_phone_number'];
    $district = $_POST['cclient_district'];
    $sector = $_POST['cclient_sector'];
    $cell = $_POST['cclient_cell'];
    $village = $_POST['cclient_village'];
    $email = $_POST['cclient_email'];
    $gender = $_POST['cclient_gender'];
    $password = $_POST['cclient_password'];

    // Prepare the SQL statement using a prepared statement
    $sql = "INSERT INTO client (client_id, client_name, phone_number, district, sector, cell, village, email, gender, password)
            VALUES (?, ?, ?, ?, ?, ?, ?, ?, ?, ?)";
    $stmt = $conn->prepare($sql);
    $stmt->bind_param("isssssssss", $client_ID, $client_name, $phone_number, $district, $sector, $cell, $village, $email, $gender, $password);

    if ($stmt->execute()) {
      
    } else {
        echo "Error: " . $stmt->error;
    }

    $stmt->close();
    $conn->close();
}
?>
<?php
     $message = "client added successfully."; // Set the success message
     echo $message;
                
                ?>
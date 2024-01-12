<!DOCTYPE html>
<html>
    <head>
        <style>
body{
    background-image: url(images/bg7.jpg);
}
.buy{
    height: 100%;
    text-align: center;
    width: 100%;
    margin-top: 15%;
}


    .form{
        margin-left: 30%;
        margin-top: 5%;
        height: 800px;
        width: 600px;
        border-radius: 12px;
        background-color: steelblue;
    }
    .form .inputbox input{
        border-radius: 12px;
        height: 50px;
        width: 65%;
        margin-left: 15%;
        margin-top: 2%;
    }
    .gender{
        height: 40px;
        width: 30px;
        margin-left: 25%;
        display: flex;
    }
    .form .signup input{
        margin-top: 30px;
        border-radius: 12px;
        height: 45px;
        width: 65%;
        margin-left: 15%;
        }
    .form .signup input:hover{
        background-image: url(images/bg3.jpg);
        
        }
        .form h1{
            background-color: peru;
            border-radius: 12px;
            }

        </style>
        <title>signup</title>
    </head>
    <body>
        <p style="font-size: 40px; color: black; text-align: center; margin-top: -5%;"><b><br><br><br> 
            <b style="font-size: 60px;"><i>w</i></b>elcome to our online shopping site</b></p>

<div class="form">
<h1>create account</h1>

<?php
$database_name = "online shop"; // Remove the space in the database name
$server_name = "localhost";
$user_name = "root";
$password = ""; // Add your database password here if applicable

$conn = new mysqli($server_name, $user_name, $password, $database_name);

if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $client_name = $_POST["cname"];
    $phone_number = $_POST['cphone'];
    $district = $_POST['cdistrict'];
    $sector = $_POST['csector'];
    $cell = $_POST['ccell'];
    $village = $_POST['cvillage'];
    $email = $_POST['cemail'];
    $gender = $_POST['cgender']; // Update the name of the radio button group
    $password = $_POST['password']; // Update the name of the password input

    // Prepare the SQL statement using a prepared statement
    $sql = "INSERT INTO client (client_name, phone_number, district, sector, cell, village, email, gender, password)
            VALUES (?, ?, ?, ?, ?, ?, ?, ?, ?)";
    $stmt = $conn->prepare($sql);
    $stmt->bind_param("sssssssss", $client_name, $phone_number, $district, $sector, $cell, $village, $email, $gender, $password);

    if ($stmt->execute()) {
        // Account creation successful. You can redirect the user to a success page or perform other actions here.
        echo "Account created successfully!";
    } else {
        echo "Error: " . $stmt->error;
    }

    $stmt->close();
    $conn->close();
}
?>

<form method="POST" action="">
    <div class="inputbox">
        <input style="font-size: 25px; font-style: italic;" type="text" id="cname" name="cname" placeholder="Names:">
    </div>
    <div class="inputbox">
        <input style="font-size: 25px; font-style: italic;" type="text" id="cphone" name="cphone" placeholder="Phone Number:">
    </div>
    <div class="inputbox">
        <input style="font-size: 25px; font-style: italic;" type="text" id="cdistrict" name="cdistrict" placeholder="District:">
    </div>
    <div class="inputbox">
        <input style="font-size: 25px; font-style: italic;" type="text" id="csector" name="csector" placeholder="Sector:">
    </div>
    <div class="inputbox">
        <input style="font-size: 25px; font-style: italic;" type="text" id="ccell" name="ccell" placeholder="Cell:">
    </div>
    <div class="inputbox">
        <input style="font-size: 25px; font-style: italic;" type="text" id="cvillage" name="cvillage" placeholder="Village:">
    </div>
    <div class="inputbox">
        <input style="font-size: 25px; font-style: italic;" type="text" id="cemail" name="cemail" placeholder="Email:">
    </div>
    <div class="gender" name="cgender" id="cgender">
        <b style="font-size: 30px;">Male</b>
        <input type="radio" value="m" name="cgender">
        <b style="font-size: 30px;">Female</b>
        <input type="radio" value="f" name="cgender">
    </div>
    <div class="inputbox">
        <input style="font-size: 25px; font-style: italic;" type="password" id="password" name="password" placeholder="Enter password">
    </div>
    <div class="signup">
        <input style="font-size: 25px;" type="submit" value="Sign up">
    </div>
</form>
 
</div>
 </body>
 </html>
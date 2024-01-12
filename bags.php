

<!DOCTYPE html>
<html>
    <head>
        <style>

.navbar{
    margin-top: -10%;
    height: 80px;
    width: 100%; 

   background-color: aliceblue;
}
.hhh b{
    margin-top: 0%;
    height: 80px;
    width: 100%; 
    position: fixed;
   background-color: aliceblue;
   margin-left: 22%;  
}


.navbar .table{
    position: fixed;
    height: 80px;
    width: 20%;
    margin-left: 92%;
    margin-top: 1%; 
}
.logo{
    position: fixed;
    height: 80px;
    width: 40%;
    float: left;
}
.navbar h1{
text-align: center;
margin-top: 10%;
}

.card {
  
    height: auto;
    width: 300px;
    background-color: red;
    border-radius: 12px;
    display:inline-block;
    margin-top: 10%;
    margin-left: 0%;
    margin-right: 5%;
    padding: 20px;
    font-size: 20px;
}

                .card {
        border: 1px solid #ccc;
        border-radius: 4px;
        padding: 10px;
        margin-bottom: 10px;
        background-color: white;
        width: 300px;
        display: inline-block;
        vertical-align: top;
        margin-right: 10px;
    }

    .card img {
        width: 100px;
        height: 100px;
        object-fit: cover;
        margin-right: 10px;
    }

    .card-details {
        flex: 1;
    }

    .card h3 {
        margin-top: 0;
    }

    .price {
        font-weight: bold;
    }
            .footer{
        background-color: lightgray;
        height: 300px;
        margin-top: 100%;
        width: 100%;   
    }
    .footer .footerbar{
    
    display: flex;
    text-align: center;
    }
    .help{
        color: rgb(43, 42, 42);
        width: 500px;
        height: 50px;
        margin-top: 5%;
        margin-left: 35%;
        font-size: 20px;
    }
    .factory{
        color: rgb(43, 42, 42);
        width: 1100px;
        height: 50px;
        margin-left: 12%;
        margin-top: -3%;
        font-size: 20px;
    }
    .privacy{
        color: rgb(43, 42, 42);
        font-size: 20px;
        width: 550px;
        height: 50px;
        margin-left: 26%;
        margin-top: -3%;
    }
    .Copyright{
        color: rgb(43, 42, 42);
        width: 500px;
        height: 50px;
        margin-left: 35%;
        margin-top: 0%;
        font-size: 20px;  
    }
        </style>
        <title>bags online Shopping</title>
        <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
        <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.4/css/all.min.css">
    </head>
    <body>
    <div class="navbar">
            <div class="logo"><img src="images/logo1.jpg" height="80px" width="55%">
            </div>
            <div class="hhh">
                    <b style="font-size: 30px;"><br>&nbsp &nbsp 
                    <a style="text-decoration: none; color: black;" href="about.php">About Us</a> &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp 
                        <a style="text-decoration: none; color: black;" href="signup.php">sign up</a> &nbsp &nbsp 
                        <a style="text-decoration: none; color: black;" href="login.php">join free</a> &nbsp &nbsp 
                        <i class="fas fa-shopping-cart" id="rejected-products">
                        <?php

$servername = "localhost";
$username = "root";
$password = "";
$dbname = "online shop";

// Create a new database connection
$conn = new mysqli($servername, $username, $password, $dbname);

// Check the connection
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}

// Retrieve the count of rejected products from the "rejected_orders" table
$sql = "SELECT COUNT(*) AS approved_product_count FROM approved_orders";
$result = $conn->query($sql);

if ($result->num_rows > 0) {
    $row = $result->fetch_assoc();
    $approvedProductCount = $row["approved_product_count"];
} else {
    $approvedProductCount = 0;
}

// Close the database connection
$conn->close();

// Return the count as the response
echo $approvedProductCount;
?>

                        </i>
                        <a href="admin login.php"><button style="height: 30px; width: 100px; margin-left: 340px;">login</button></a>

            </div>
            <h1>
            <div class="card-container">
            <?php
$database_name = "online shop";
$server_name = "localhost";
$user_name = "root";
$password = ""; // Add your database password here if applicable

$conn = new mysqli($server_name, $user_name, $password, $database_name);

if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}

// Retrieve electronic products from the database
$stmt = $conn->prepare("SELECT file_name, product_name, product_category, description, price FROM products WHERE product_category='bags' ");
$stmt->execute();

$stmt->bind_result($file_name, $product_name, $product_category, $product_description, $product_price);

while ($stmt->fetch()) {
    echo '
    <div class="card">
        <img src="images/' . $file_name . '" alt="Product Image">
        <div class="card-details">
            <h3>' . $product_name . '</h3>
            <p>' . $product_description . '</p>
            <p style="color: green;" class="price">$' . $product_price . '</p>
            <a style="text-decoration: none; color: green; font-size: 25px;" href="buy.php"><p>Order now</p></a>
        </div>
    </div>
    ';
}

// Close the prepared statement
$stmt->close();

// Close the database connection
$conn->close();
?>
</div>
</div>

<div class="footer">
                <div class="footerbar">
                    <div style="margin-left: 50%;">contact us: <i class="fas fa-address-book"></i></div>
                    <div>follow us: <i class="fab fa-facebook-square"></i> <i class="fab fa-whatsapp"></i>
                        <i class="fab fa-instagram"></i> <i class="fab fa-youtube"></i></div>
                   </div>
                   <div class="help">
                   <p> <a style="color: rgb(43, 42, 42);" href="cards.php">home</a> | 
                    <a style="color: rgb(43, 42, 42);" href="about.php">about us</a> | 
                    <a style="color: rgb(43, 42, 42);" href="faq.php">FAQ</a> | help</p>
                   </div>
                   <div class="factory">
                    <p>hot products | made in rwanda | china products | stock photos | wholesale products | wholesale price | industries </p>
                    </div>
                    <div class="privacy">
                        <p>user agreements | product channels | private policies | services</p>
                        </div>
                        <div class="Copyright">
                            <p> Copyright © 2023-2052</p>
                            </div>
               </div> 
            </body>
            </html>
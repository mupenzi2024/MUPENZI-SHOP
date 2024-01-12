
<!DOCTYPE html>
<html>
    <head>
    <style>
    .card {
        border: 1px solid #ccc;
        border-radius: 4px;
        padding: 10px;
        margin-bottom: 10px;
        background: white;
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
</style>
        <title>online shopping</title>
        <link rel="stylesheet" type="text/css" href="card.css">
        <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.4/css/all.min.css">
    </head>
    <body>
        <div class="navbar">
            <div class="logo"><img src="images/logo1.jpg" height="80px" width="50%">
            </div>
            <div class="hhh">
                <a style="text-decoration: none; color: black;" href="buy.php">
                    <button style="border-radius: 12px; font-size: 30px;"><b>Shop now</b></button></a></div>
            <div class="table">
            <table style="height: 80px; width: 50%;">
                <tr>
                    <td>
                        <div style= " width: 0px;" class="dropdown4">
                            <b style="font-size: 37px; color: black;"><span>
                                <img style="height: 50px; width: 50px; border-radius: 40px;" src="images/bg10.jpeg">
                            </span></b>
                            <div class="dropdown4-content">
                           
                            <a style="text-decoration: none; color: auto;" href="about.php"><p><b style="font-size: 20px;">
                            <i class="fas fa-info-circle"></i>&nbsp about us</b></p></a>
                           
                        <a style="text-decoration: none; color: auto;" href="faq.php"><p><b style="font-size: 20px;">
                        <i class="fas fa-question-circle"></i>&nbsp asked questions</b></p></a>
                        
                            <a style="text-decoration: none; color: auto;" href="qos.php"><p><b style="font-size: 20px;">
                            <i class="fas fa-cogs"></i>&nbsp our services</b></p></a>

                            </div>
                          </div>
                </td>
                <td><a style="text-decolation: none; color: black;" href="admin login.php">
                <button style= "height: 30px; width: 80px; margin-left: 70%;">login</button></a></td>
                </tr>
            </table>
            </div></div>
        <div class="controller">
            <div class="intro">
                <h1><b>W</b>elcome to this online commerce</h1>
                <p style="font-size: 40px;">
                this website is available and accessible for people
                who want to concert us in our e_commerce,
                you can refer from us to learn more.
                </p>
                <form id="form"> 
                  <input style="height: 30px; width: 400px;" type="search" id="query" name="q" placeholder="Search...">
                  <button style="height: 30px; width: auto;">Search</button>
                </form><br><br>
                <div class="dropdown">
                    <b style="font-size: 37px; color: black;"><span>product</span></b>
                    <div class="dropdown-content">
                   
                        <p><b style="font-size: 20px;">
             <a style="text-decoration: none; color: white;" href="electronic.php">electronic</a></b></p>
                   
                <p><b style="font-size: 20px;">
             <a style="text-decoration: none; color: white;" href="shoes.php">shoes</a></b></p>
                   
                <p><b style="font-size: 20px;">
                    <a style="text-decoration: none; color: white;" href="clothes.php">clothes</a></b></p>
                   
                    <p><b style="font-size: 20px;">
                     <a style="text-decoration: none; color: white;" href="hom mat.php">Home equipments</a></b></p>
                   
                    <p><b style="font-size: 20px;">
                    <a style="text-decoration: none; color: white;" href="bags.php">bags</a></b></p>
                  
                    <p><b style="font-size: 20px;">
                        <a style="text-decoration: none; color: white;" href="const mat.php">construction materials</a></b></p>
                   
                    <p><b style="font-size: 20px;">others</b></p>
                    </div>
                  </div>
                  <div class="dropdown2">
                    <b style="font-size: 35px; color: black;"><span>languages</span></b>
                    <div class="dropdown-content">
                    <p><b style="font-size: 20px;">english</b></p>
                    <p><b style="font-size: 20px;">swahili</b></p>
                    </div>
                  </div>
                  <div class="dropdown3">
                    <b style="font-size: 37px; color: black;"><span>more</span></b>
                    <div class="dropdown-content">
                    
                        <p><b style="font-size: 20px;">
                            <a style="text-decoration: none; color: white;" href="about.php">about us</a></b></p>
                    
                        <p><b style="font-size: 20px;">
                            <a style="text-decoration: none; color: white;" href="faq.php">FAQ</a></b></p>
                    <p><b style="font-size: 20px;">
                        <a style="text-decoration: none; color: white;" href="qos.php">QOS</a></b></p>
                    </div>
                  </div>
                  </div> 
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
$stmt = $conn->prepare("SELECT product_name, product_category, description, price, file_name FROM products");
$stmt->execute();
$stmt->bind_result($product_name, $product_category, $product_description, $product_price, $file_name);

while ($stmt->fetch()) {
    echo '
    <div class="card">
        <img src="images/' . $file_name . '" alt="Product Image">
        <div class="card-details">
            <h3>' . $product_name . '</h3>
            <p>' . $product_description . '</p>
            <p style="color: green;" class="price">$' . $product_price . '</p>
            <a style="text-decoration: none; color: green;" href="buy.php" class="buy-button">Buy</a>
        </div>
    </div>
    ';
}

// Close the prepared statement
$stmt->close();

// Close the database connection
$conn->close();
?>

<!-- HTML card -->

  <div class="footer">
    <h1 style="font-size: 25px; color: rgb(44, 45, 46);"><b>follow us for more informations</b></h1><br>
    <footer style="font-size: 40px;">
       <blockquote><button style="font-size: 30px; color: black; border-radius: 12px;"><b>
        <a style="text-decoration: none; color: black;" href="about.php">about</a></b></button></blockquote>
       <img src="images/gif6.gif"  style="height: 4%" width="2.5%">mupshop</img><br>
       <img src="images/gif7.gif"  style="height: 4%" width="2.5%">0781676862</img>
       <blockquote><marquee style="font-size: 40px;"><b><i>
        !!visit rwanda!!sometimes you wish personal information inbox
        you can ask throught our email:mupshop2023@gmail.com</b><i></marquee></blockquote>
    </footer>
   </div>
</body>
</html>
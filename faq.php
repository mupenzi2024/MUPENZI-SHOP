<!DOCTYPE html>
<html>
    <head>
        <style>
            *{
    margin: 0;
    padding: 0;
}

.navbar{
    position: fixed;
    height: 80px;
    width: 100%; 
    margin-top: -10%;
   background-color: aliceblue;
}
.hhh b{
    height: 80px;
    width: 100%;
    background-color: aliceblue;
 
}
.hhh button{
    margin-right: 4%;
    margin-top: -2%;
    float: right;
    height: 80px;
    width: 100%; 
}

.navbar .table{
 
    height: 80px;
    width: 20%;
    margin-left: 92%;
    margin-top: 1%; 
}
.logo{

    height: 80px;
    width: 40%;
    float: left;
}
p{
    margin-left: 4%;
    margin-top: 10%;
    font-size: 20px;
    }
    table{
        margin-left: 0%;
        margin-top: 5%;
        height: 700px;
        width: 1000px;
    }
    table th{
        height: 50px;
    }
    table p{
        margin-top: 2%;
  
    }
    table td{
        height: 100px;
    }
    table td p a{
     color: royalblue;
     text-decoration: none;
    }
    table td p a:hover{
        text-decoration: underline;
        color: red;
    }
    table tr th p{
        text-decoration: underline;
    }
    .footer{
        background-color: lightgray;
        height: 400px;
        margin-top: 10%;
        width: 100%;   
    }
    .footer .footerbar{
    
    display: flex;
    text-align: center;
    }
    .footer .footerbar div{
        margin-left: 15%;
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
        margin-top: -6%;
        font-size: 20px;
    }
    .privacy{
        color: rgb(43, 42, 42);
        font-size: 20px;
        width: 550px;
        height: 50px;
        margin-left: 26%;
        margin-top: -4%;
    }
    .Copyright{
        color: rgb(43, 42, 42);
        width: 500px;
        height: 50px;
        margin-left: 35%;
        margin-top: -4%;
        font-size: 20px;  
    }
    .body {
        background-color: white;
        margin-left: 14%;
        margin-top: 5%;
        height: 70%;
        width: 1000px;
        border: 1px solid black;
        border-radius: 4px;
    }
    
        </style>
        
        <title>FAQ</title>
        <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
        <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.4/css/all.min.css">
    </head>
    <body>
        
        <div class="navbar">
            <div class="logo"><img src="images/logo1.jpg" height="80px" width="55%">
            </div>
            <div class="hhh">
                    <b style="font-size: 30px;"><br>&nbsp  <a style="text-decoration: none; color: black;" href="about.php">About Us</a> &nbsp &nbsp &nbsp &nbsp 
                        <a style="text-decoration: none; color: black;" href="buy.php">sign up</a> &nbsp &nbsp 
                        <a style="text-decoration: none; color: black;" href="buy.php">join free</a> &nbsp 
                        <i class="fas fa-shopping-cart" id="rejected-products">
                        <?php
// Assuming you have a database connection established
// Adjust the database credentials as per your configuration
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
                        <a href="admin login.php"><button style="height: 30px; width: 100px; margin-left: 350px;">login</button></a>

            </div>
           
            </div>
            <p><a style="text-decoration: none; color: black;" href="welcome.php">welcome</a> 
                <i style="font-size: 13px;" class="fas fa-chevron-right"></i><a style="text-decoration: none; color: black;" href="cards.html">home</a> 
                <i style="font-size: 13px;" class="fas fa-chevron-right"></i> frequently asked questions</p>
                <div class="body">
            <table style="margin-top: 1%;">
                <tr>
                    <th colspan="2"><b style="margin-left: -63%;">Frequently asked questions</b> 
                    <p style="color: grey; font-size: 23px; margin-left: -43%; margin-top: 1%;" >Select your interested categories to locate your question</p></th>
                  </tr>
                  <tr>
                    <td><br><i class="fas fa-info-circle"></i> &nbsp <u>About Mupshop</u><br>
                        <p>. <a href="#">what is mupshop?</a></p>
                        <p>. <a href="#">Does Mupshop supply or sell products?</a></p>
                        <p>. <a href="#">Can Mupshop recommend specific products to me?</a></p>
                        <p>. <a href="#">In which places does the Mupshop have offices?</a></p>
                        <p>. <a href="#">Does Mupshop provide shipping services?</a></p>
                        <br><br>
                    </td>
                    <td><i class="fas fa-user-cog"></i> &nbsp <u>Account Management</u><br>
                        <p>. <a href="#">What is Star Buyer?</a></p>
                        <p>. <a href="#">How can I update my privacy settings?</a></p>
                        <p>. <a href="#">How can I delete my account?</a></p>
                        <p>. <a href="#">How do I change my email address?</a></p>
                        <p>. <a href="#">My account has been closed for security reasons. What can I do?</a></p>
                    </td>
                  </tr>
                  <tr>
                    <td><i class="fas fa-sign-in-alt"></i> &nbsp <u></u>Login & Sign in</u><br>
                        <p>. <a href="#">How can I register on Mupshop?</a></p>
                        <p>. <a href="#">What can I do if I forgot my password?</a></p>
                        <p>. <a href="#">Can I have more than one account?</a></p>
                        <p>. <a href="#">Is it mandatory for me to register as a member to find suppliers on Mupshop?</a></p>
                        <p>. <a href="#">What can I do if I forgot my registered email address?</a></p>
                        <br><br>
                    </td>
                    <td><i class="fas fa-search"></i> &nbsp <u></u>Searching Products Efficiency</u><br>
                        <p>. <a href="#">How can I search for products on Mupshop?</a></p>
                        <p>. <a href="#">What should I do if I can't find suitable products?</a></p>
                        <p>. <a href="#">How can I post a Sourcing Request to get accurate quotes?</a></p>
                    </td>
                  </tr>
                  <tr>
                  <td><i class="fas fa-phone"></i> &nbsp <u></u>Contacting Suppliers</u><br>
                    <p>.  <a href="#">How can I contact suppliers?</a></p>
                    <p>.  <a href="#">How can I chat with the suppliers online?</a></p>
                    <br><br>
                </td>
              </tr>
                  </table>
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
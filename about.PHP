<!DOCTYPE html>
<html>
    <head><title>about us</title>
        <link rel="stylesheet" type="text/css" href="about.css">
        <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
        <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.4/css/all.min.css">
    </head>
    <body>
        
        <div class="navbar">
            <div class="logo"><img src="images/logo1.jpg" height="80px" width="55%">
            </div>
            <div class="hhh">
                    <b style="font-size: 30px;"><br>&nbsp &nbsp About Us &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp 
                        <a style="text-decoration: none; color: black;" href="buy.php">sign up</a> &nbsp &nbsp 
                        <a style="text-decoration: none; color: black;" href="buy.php">join free</a> &nbsp &nbsp 
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
           
                    <div class="categories">
                            <button><i class="fas fa-tag"></i> all categories</button>
                    </div>
                
                        <form id="form"> 
                        <input style="height: 30px; width: 400px;" type="search" id="query" name="q" placeholder="Search...">
                        <button style="height: 30px; width: auto;">Search</button>
                        </form>
          <div class="about">
            <h1><br><br><br>ABOUT US</h1>
            <br><br><p>Being a comprehensive service platform for foreign trade,
                Mupenzi shop was committed to tapping business opportunities for many suppliers and overseas buyers,
                and providing one-stop services for promoting the international trade between the two sides.
                Over the past few years, Mupenzi shop has become one of the most extensive and reliable web addresses
                 for international trade.</p>

                 <div class="bottombar">
                  <div>categories<br>80+</div>
                  <div>registered suppliers<br>60+</div>
                  <div>registered clients<br>40+</div>
                  <div>languages<br>12+</div>
                 </div>
          </div>
          <div class="body">
            <h2>Millions of High-quality Products</h2>
            <br>
            <p>Mupenzi shop currently has more than 80 pieces of product
             information from 10 industries. Besides,
              based on different procurement demands from different buyers,
               Mupenzi shop also provides various methods as follows for global buyers to source products.</p>
            <br><br>
            <div class="cards">
            
            <div class="card1">
                <img style="width: 100%; height: auto;" src="pictures/img1.jpg">
            </div>
            <div class="card2">
           <p>products categories &nbsp &nbsp &nbsp<i class="fas fa-arrow-right"></i></p>
            </div>
        </div>
        <div class="cards">
            
            <div class="card1">
                <img style="width: 100%; height: auto;" src="pictures/img2.jpg">
            </div>
            <div class="card2">
           <p>SMART EXPO &nbsp &nbsp &nbsp &nbsp &nbsp<i class="fas fa-arrow-right"></i></p>
            </div>
        </div>
        <div class="cards">
            
            <div class="card1">
                <img style="width: 100%; height: auto;" src="pictures/img3.jpg">
            </div>
            <div class="card2">
           <P>Awards products &nbsp<i class="fas fa-arrow-right"></i></P>
            </div>
        </div>
        <div class="card4">
            
            <div class="card1">
                <img style="width: 100%; height: auto;" src="pictures/img4.jpg">
            </div>
            <div class="card2">
                <P>Industry Hubs &nbsp &nbsp &nbsp &nbsp  &nbsp &nbsp<i class="fas fa-arrow-right"></i></P>
            </div>
        </div>
        <div class="card5">
            
            <div class="card1">
                <img style="width: 100%; height: auto;" src="pictures/img5.jpg">
            </div>
            <div class="card2">
                <P>Custom Products &nbsp &nbsp &nbsp &nbsp &nbsp<i class="fas fa-arrow-right"></i></P>
            </div>
        </div>
        <div class="card6">
            
            <div class="card1">
                <img style="width: 100%; height: auto;" src="pictures/img6.jpg">
            </div>
            <div class="card2">
                <P>Easy Sourcing &nbsp &nbsp &nbsp &nbsp &nbsp<i class="fas fa-arrow-right"></i></P>
            </div>
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
            <p>hot products | made in rwanda | china products | stock photos | wholesale products | wholesale price | industries  </p>
            </div>
            <div class="privacy">
                <p>user agreements | product channels | private policies | services</p>
                </div>
                <div class="Copyright">
                    <p> Copyright © 2023-2052</p>
                    </div>
       </div> 

       <!-- Place this script at the end of the body tag -->
<script>
  // Function to handle the form submission
  function handleSearch(event) {
    event.preventDefault(); // Prevent form submission

    // Get the search query from the input field
    var query = document.getElementById('query').value.trim();

    // Send an AJAX request to the server
    var xhr = new XMLHttpRequest();
    xhr.open('GET', 'search.php?q=' + encodeURIComponent(query), true);
    xhr.onload = function () {
      if (xhr.status === 200) {
        // Process the search results returned from the server
        var searchResults = JSON.parse(xhr.responseText);
        displaySearchResults(searchResults);
      } else {
        // Handle error conditions
        console.error('Request failed. Status:', xhr.status);
      }
    };
    xhr.send();
  }

  // Function to display search results
  function displaySearchResults(results) {
    // Modify this function to display the search results in your desired format
    // For example, you can update the HTML on the page to show the results
    console.log(results);
  }

  // Add an event listener to the form submission
  document.getElementById('form').addEventListener('submit', handleSearch);
</script>
            </body>
            </html>
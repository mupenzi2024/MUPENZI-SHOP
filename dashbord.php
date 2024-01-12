<?php

$database_name = "online shop";
$server_name = "localhost";
$user_name = "root";
$password = ""; // Add your database password here if applicable

$conn = new mysqli($server_name, $user_name, $password, $database_name);

?>
<html>

<head>
  <style>
    body{
  background-color: whitesmoke;
}
.top-bar {
  position: fixed;
  height: 80px;
  width: 100%;
  background: white;
  display: grid;
  grid-template-columns: 10fr 0.4fr 1fr;
  grid-gap: 5px;
  align-items: center;
  color: #444;
  padding: 0 20px;
  box-shadow: 0 4px 8px 0 rgb(0, 0, 0, 0.2);
 margin-left: 22%;
 margin-top: -7%;
}
.top-bar .search {
  position: relative;
  max-width: 400px;
}
.search input {
  width: 100%;
  min-width: 128px;
  height: 40px;
  padding: 0 40px;
  font-size: 16px;
  outline: none;
  border: none;
  background: white;
}
.search i {
  position: absolute;
  right: 15px;
  top: 10px;
  cursor: pointer;
}
.user {
  position: relative;
  width: 50px;
  height: 50px;
}
img {

  width: 100%;
  height: 100%;
  top: 0;
  left: 0;
  object-fit: cover;
}
.container{
  height: 100%;
  width: 100%;
  background-color: blueviolet;
}
.navbar{
  height: 100px;
  width: 100%;
  background-color: #444;
  position: fixed;
  margin-top: -7%;
  padding-bottom: 4%;
}
.control{
height: 1000px;
width: 350px;
background-color: #444;
margin-top: 7%;
}
.control button{
  background-color: yellowgreen;
}
.control .dashboard button{
  background-color: #444;
}
.control .dashboard button:hover{
  background-color: yellowgreen;
}
.navbar div{
  font-size: 25px;
  float: right;
  margin-top: -4%;
  margin-right: 3%;
}
.body{
  height: 100%;
  width: 1000px;
  background-color: antiquewhite;
 margin-left: 100%;
 margin-top: -109%;
}
.control .body p{
  text-align: center;
}
.control .body table{
  margin: 10%;
}
.cards{
  height: 150px;
  width: 22%;
  background-color:whitesmoke;
  border-radius: 12px;
  display: inline-block;
  margin: 10px;
}

.tab {
  display: none;
}
.tab-button {
  background-color: #f1f1f1;
  border: none;
  color: black;
  padding: 10px 20px;
  font-size: 16px;
  cursor: pointer;
  border-radius: 12px;
}
.tab-button:hover {
  background-color: #ddd;
}
.tab-button.active {
  background-color: #ccc;
}
.dropdown{
  height: 50px;
  width: 250px;
  display: inline-block;
  border-radius: 12px;
  cursor: pointer;
}
.dropdown-content {
  display: none;
  position: absolute;
  background-color: #f9f9f9;
 width: 200px;
 padding: 2%;
 color: white;
}
.dropdown:hover .dropdown-content{
  background-color: black;
  display: block;
}
.dropdown:hover{
  background-color: antiquewhite;
}
.dropdown2{
  height: 50px;
  width: 250px;
  display: inline-block;
  border-radius: 12px;
  cursor: pointer;
}
.dropdown2 .dropdown-content p:hover{
  background-color: antiquewhite;
}

.dropdown2:hover .dropdown-content{
  background-color: black;
  display: block;
}
.dropdown2:hover{
  background-color: antiquewhite;
}
.dropdown3{
  height: 50px;
  width: 250px;
  display: inline-block;
  border-radius: 12px;
  cursor: pointer;
}
.dropdown3 .dropdown-content p:hover{
  background-color: antiquewhite;
}

.dropdown3:hover .dropdown-content{
  background-color: black;
  display: block;
}
.dropdown3:hover{
  background-color: antiquewhite;
}
form{
  margin-top: -2%;
  height: 1000px;
  width: 100%;
  background-color: cadetblue;
}
form h2{
  text-align: center;
}
form label{
margin-left: 2%;
}
form input{
  margin-top: -2%;
  margin-left: 22%;
  height: 50px;
  width: 50%;
background-color: antiquewhite;
display: flex;
}
.send input{
  height: 40px;
  width: 15%;
  display: block;
}
.reset input{
  margin-top: -3%;
  margin-left: 55%;
  height: 40px;
  width: 15%;
  display: block;
}
.add input{
height: 40px;
width: 15%;
display: block;
}
    .card1 {
        border: 1px solid #ccc;
        border-radius: 4px;
        padding: 10px;
        margin-bottom: 10px;
        background-color: white;
        height: 310px;
        width: 250px;
        display: inline-block;
        vertical-align: top;
        margin-right: 10px;
    }

    .card1 img {
        width: 100px;
        height: 100px;
        object-fit: cover;
        margin-right: 10px;
    }

    .card1-details {
        flex: 1;
    }

    .card1 h3 {
        margin-top: 0;
    }

    .price {
        font-weight: bold;
    }
  </style>

<title>dashboard</title>
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.4/css/all.min.css">
</head>
<body>
    <script>
        function openTab(tabName) {
          var i;
          var tabs = document.getElementsByClassName("tab");
          var tabButtons = document.getElementsByClassName("tab-button");
    
          // Hide all the tabs
          for (i = 0; i < tabs.length; i++) {
            tabs[i].style.display = "none";
          }
          
          // Remove the 'active' class from all tab buttons
          for (i = 0; i < tabButtons.length; i++) {
            tabButtons[i].classList.remove("active");
          }
    
          // Show the selected tab
          document.getElementById(tabName).style.display = "block";
    
          // Add the 'active' class to the clicked tab button
          document.getElementById(tabName + "-button").classList.add("active");
        }
      </script>
   <p><img style="height: 80px; width: 297px; position: fixed;" src="images/logo1.jpg"></p>
    <div class="top-bar">

        <div class="input-box">
            <i class="uil uil-search"></i>
            <input type="text" placeholder="Search here..." />
            <button class="button">Search</button>
        </div>
        <i class="fas fa-bellring"></i>
        <div class="user">

            <img src="profile.png">
        </div></div>

<div style="padding-bottom: 13%;" class="control">
    <div class="dashboard">
<br><i style="font-size: 30px;" class="fa fa-home"></i>&nbsp<button style="font-size: 32px; color: white;"
    id="dashboard-button" class="tab-button" onclick="openTab('dashboard')"><b>Dashboard<b></button><br><br>
</div>

<i style="font-size: 30px;" class="fas fa-users"></i>&nbsp
    <div class="dropdown">
        <b style="font-size: 30px; color: white;"><span>manage users</span></b>
        <div class="dropdown-content">
        <p><b style="font-size: 20px;">
        <button style="font-size: 20px; color: black;" 
        id="adduser-button" class="tab-button" onclick="openTab('adduser')">add a user</button></b></p>
        <button style="font-size: 20px; color: black;" 
        id="apdateuser-button" class="tab-button" onclick="openTab('apdateuser')">apdate a user</button></b></p>
        <button style="font-size: 20px; color: black;" 
        id="all-users-button" class="tab-button" onclick="openTab('all-users')">all users</button></b></p>
        </div>
      </div><br><br>


    <i style="font-size: 30px;" class="fab fa-paypal"></i>&nbsp
    <div class="dropdown">
        <b style="font-size: 30px; color: white;"><span>manage products</span></b>
        <div class="dropdown-content">
        <p><b style="font-size: 20px;">
        <button style="font-size: 20px; color: black;" 
        id="products-button" class="tab-button" onclick="openTab('products')">add a product</button></b></p>
        <button style="font-size: 20px; color: black;" 
        id="delete-product-button" class="tab-button" onclick="openTab('apdate-product')">apdate a product</button></b></p>
        <button style="font-size: 20px; color: black;" 
        id="all-products-button" class="tab-button" onclick="openTab('all-products')">all products</button></b></p>
        </div>
      </div><br><br>

<i style="font-size: 30px;" class="fa fa-user-md"></i>&nbsp
<div class="dropdown2">
    <b style="font-size: 30px; color: white;"><span>manage client</span></b>
    <div class="dropdown-content">
        <button style="font-size: 20px; color: black;" 
        id="users-button" class="tab-button" onclick="openTab('users')">add a client</button></b></p>
        <button style="font-size: 20px; color: black;" 
        id="update-client-button" class="tab-button" onclick="openTab('update-client')">update a client</button></b></p>
        <button style="font-size: 20px; color: black;" 
        id="clients-button" class="tab-button" onclick="openTab('clients')">all clients</button></b></p>
        </div>
      </div><br><br>

<i style="font-size: 30px;" class="fa fa-car"></i>&nbsp
<div class="dropdown3">
    <b style="font-size: 30px; color: white;"><span>manage orders</span></b>
    <div class="dropdown-content">
        <button style="font-size: 20px; color: black;" 
        id="approved_orders-button" class="tab-button" onclick="openTab('approved_orders')">approved orders</button></b></p>
        <button style="font-size: 20px; color: black;" 
        id="pending-button" class="tab-button" onclick="openTab('pending')">pending orders</button></b></p>
        <button style="font-size: 20px; color: black;" 
        id="rejected_orders-button" class="tab-button" onclick="openTab('rejected_orders')">rejected orders</button></b></p>
        </div>
      </div><br><br>

<div style="padding-bottom: 50%; margin-top: -385px; background-color: white;" class="body">
    <div id="dashboard" class="tab">
        <!-- Content for the Dashboard tab -->
<p>MANAGE YOUR SITE</p>
<?php
// Assuming you have a database connection established

// Replace the following lines with your actual database connection details
$host = 'localhost';
$username = 'root';
$password = '';
$database = 'online shop';

// Create a database connection
$connection = mysqli_connect($host, $username, $password, $database);

// Check if the connection was successful
if (!$connection) {
    die("Database connection failed: " . mysqli_connect_error());
}

// Query to count the number of records in the product table
$query = "SELECT COUNT(*) as count FROM products";
$result = mysqli_query($connection, $query);

// Fetch the count value
$count = mysqli_fetch_assoc($result)['count'];

// Display the count
echo "<div class='cards'>
        <div class='card'>
            <p>Number of products</p>
        </div>
        <div class='card'>
            <p>$count</p>
        </div>
      </div>";

// Close the database connection
mysqli_close($connection);
?>

<div class="cards">
            <div class="card">
            <p>product categories</p>
            </div>
            <div class="card">
                <p>16+</p>
            </div>
            </div>

        <?php
// Assuming you have a database connection established

// Replace the following lines with your actual database connection details
$host = 'localhost';
$username = 'root';
$password = '';
$database = 'online shop';

// Create a database connection
$connection = mysqli_connect($host, $username, $password, $database);

// Check if the connection was successful
if (!$connection) {
    die("Database connection failed: " . mysqli_connect_error());
}

// Query to count the number of records in the product table
$query = "SELECT COUNT(*) as count FROM users";
$result = mysqli_query($connection, $query);

// Fetch the count value
$count = mysqli_fetch_assoc($result)['count'];

// Display the count
echo "<div class='cards'>
        <div class='card'>
            <p>Number of users</p>
        </div>
        <div class='card'>
            <p>$count</p>
        </div>
      </div>";

// Close the database connection
mysqli_close($connection);
?>

<?php
// Assuming you have a database connection established

// Replace the following lines with your actual database connection details
$host = 'localhost';
$username = 'root';
$password = '';
$database = 'online shop';

// Create a database connection
$connection = mysqli_connect($host, $username, $password, $database);

// Check if the connection was successful
if (!$connection) {
    die("Database connection failed: " . mysqli_connect_error());
}

// Query to count the number of records in the product table
$query = "SELECT COUNT(*) as count FROM orders";
$result = mysqli_query($connection, $query);

// Fetch the count value
$count = mysqli_fetch_assoc($result)['count'];

// Display the count
echo "<div class='cards'>
        <div class='card'>
            <p>Number of orders</p>
        </div>
        <div class='card'>
            <p>$count</p>
        </div>
      </div>";

// Close the database connection
mysqli_close($connection);
?>
            
                        </div>

                        <div id="adduser" class="tab">

    <form style="padding-bottom: 17%;" action="adduser.php" method="post" id="user-form">
    <h2>Add a user</h2>

    <label for="user_id" style="font-size: 25px;">user_ID:</label>
    <input type="text" id="user_id" name="user_id"><br><br>

    <label for="cname" style="font-size: 25px;">user Name:</label>
    <input type="text" id="cname" name="cname"><br><br>

    <label for="fname" style="font-size: 25px;">Choose File:</label>
    <input type="file" id="fname" name="fname" style="font-size: 39px;"><br><br>

    <label for="user_phone_number" style="font-size: 25px;">Phone Number:</label>
    <input type="text" id="user_phone_number" name="user_phone_number"><br><br>

    <label for="user_district" style="font-size: 25px;">District:</label>
    <input type="text" id="user_district" name="user_district"><br><br>

    <label for="user_sector" style="font-size: 25px;">Sector:</label>
    <input type="text" id="user_sector" name="user_sector"><br><br>

    <label for="user_cell" style="font-size: 25px;">Cell:</label>
    <input type="text" id="user_cell" name="user_cell"><br><br>

    <label for="user_village" style="font-size: 25px;">Village:</label>
    <input type="text" id="user_village" name="user_village"><br><br>

    <label for="user_email" style="font-size: 25px;">Email:</label>
    <input type="email" id="user_email" name="user_email"><br><br>

    <label for="user_gender" style="font-size: 25px;" >Gender:
    <select style="font-size: 20px;" name="user_gender" id="user_gender">
      <option>choose sex</option>
      <option>M</option>
      <option>F</option>
      <option>Others</option>
    </select></label>
    <br><br><br>
    <label for="user_password" style="font-size: 25px;">Password:</label>
    <input type="password" id="user_password" name="user_password" required><br><br>
    <div class="add">
        <input type="submit" name="add" value="Add">
    </div>
    <div class="reset">
        <input type="reset" value="Reset">
    </div>
</form>
                       </div>

                       <div id="apdateuser" class="tab">

    <form style="padding-bottom: 17%;" action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]); ?>" method="post" id="user-form">
    <h2>update a user</h2>

    <label for="user_id" style="font-size: 25px;">user_ID:</label>
    <input type="text" id="user_id" name="user_id"><br><br>

    <label for="cname" style="font-size: 25px;">user Name:</label>
    <input type="text" id="cname" name="cname"><br><br>

    <label for="fname" style="font-size: 25px;">Choose File:</label>
    <input type="file" id="fname" name="fname" style="font-size: 39px;"><br><br>

    <label for="user_phone_number" style="font-size: 25px;">Phone Number:</label>
    <input type="text" id="user_phone_number" name="user_phone_number"><br><br>

    <label for="user_district" style="font-size: 25px;">District:</label>
    <input type="text" id="user_district" name="user_district"><br><br>

    <label for="user_sector" style="font-size: 25px;">Sector:</label>
    <input type="text" id="user_sector" name="user_sector"><br><br>

    <label for="user_cell" style="font-size: 25px;">Cell:</label>
    <input type="text" id="user_cell" name="user_cell"><br><br>

    <label for="user_village" style="font-size: 25px;">Village:</label>
    <input type="text" id="user_village" name="user_village"><br><br>

    <label for="user_email" style="font-size: 25px;">Email:</label>
    <input type="email" id="user_email" name="user_email"><br><br>

    <label for="user_gender" style="font-size: 25px;" >Gender:
    <select style="font-size: 20px;" name="user_gender" id="user_gender">
      <option>choose sex</option>
      <option>M</option>
      <option>F</option>
      <option>Others</option>
    </select></label>
    <br><br><br>

    <label for="user_password" style="font-size: 25px;">Password:</label>
    <input type="password" id="user_password" name="user_password" required><br><br>
    
    <div class="add">
        <input type="submit" name="add" value="Add">
    </div>
    <div class="reset">
        <input type="reset" value="Reset">
    </div>
</form>
                       </div>

                       <div id="all-users" class="tab">
                       <?php
$database_name = "online shop";
$server_name = "localhost";
$user_name = "root";
$password = ""; // Add your database password here if applicable

$conn = new mysqli($server_name, $user_name, $password, $database_name);

if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}

// Check if a user delete request was made
if (isset($_GET['delete_user']) && !empty($_GET['delete_user'])) {
    $user_id = $_GET['delete_user'];
    
    // Delete the user from the database
    $delete_stmt = $conn->prepare("DELETE FROM users WHERE user_ID = ?");
    $delete_stmt->bind_param("s", $user_id);
    $delete_stmt->execute();
    
    // Check if the deletion was successful
    if ($delete_stmt->affected_rows > 0) {
        echo "User deleted successfully.";
    } else {
        echo "Failed to delete user.";
    }
    
    // Close the delete statement
    $delete_stmt->close();
}

// Retrieve users from the database
$stmt = $conn->prepare("SELECT user_ID, user_name, file_name, phone_number, district, sector, cell, village, email, gender FROM users");
$stmt->execute();

$stmt->bind_result($user_ID, $user_name, $file_name, $phone_number, $district, $sector, $cell, $village, $email, $gender);

echo '<table style="height: auto; width: 100%; margin-top:16px; margin-left: 0%;" border="1">
<thead>
  <tr>
    <th>User ID</th>
    <th>User Name</th>
    <th>File Name</th>
    <th>Phone Number</th>
    <th>District</th>
    <th>Sector</th>
    <th>Cell</th>
    <th>Village</th>
    <th>Email</th>
    <th>Gender</th>
    <th>Action</th>
  </tr>
</thead>
<tbody>';

while ($stmt->fetch()) {
    echo '<tr>
            <td>'.$user_ID.'</td>
            <td>'.$user_name.'</td>
            <td>'.$file_name.'</td>
            <td>'.$phone_number.'</td>
            <td>'.$district.'</td>
            <td>'.$sector.'</td>
            <td>'.$cell.'</td>
            <td>'.$village.'</td>
            <td>'.$email.'</td>
            <td>'.$gender.'</td>
            <td>
                <a href="#" class="edit"><i class="fas fa-edit"></i></a>
                <a href="?delete_user='.$user_ID.'" class="delete"><i class="fas fa-trash"></i></a>
            </td>
          </tr>';
}

echo '</tbody>
</table>';

// Close the prepared statement
$stmt->close();

// Close the database connection
$conn->close();
?>
                       </div>
                       
                        <div id="products" class="tab">

<form style="padding-bottom: 17%;" action="addproduct.php" method="post" id="product-form" enctype="multipart/form-data">
    <h2>Add a product</h2>

    <label for="id" style="font-size: 25px;">Product ID:</label>
    <input type="text" id="id" name="id"><br><br>

    <label for="pname" style="font-size: 25px;">Product Name:</label>
    <input type="text" id="pname" name="pname"><br><br>

    <label for="pcategory" style="font-size: 25px;" >Product Category: 
    <select style="font-size: 20px;" name="scategory" id="scategory">
      <option>choose category</option>
      <option>electronic</option>
      <option>shoes</option>
      <option>clothes</option>
      <option>bags</option>
      <option>construction materials</option>
      <option>others</option>
      <option>Home equipments</option>
      <option>Beauty & Personal Care</option>
      <option>Sports & Fitness</option>
      <option>Books & Media</option>
      <option>Health & Wellness</option>
      <option>Baby & Kids</option>
      <option>Home Appliances</option>
      <option>Automotive</option>
      <option>Pet Supplies</option>
    </select></label>
    <br><br><br>

    <label for="fname" style="font-size: 25px;">Choose File:</label>
    <input type="file" id="fname" name="fname" style="font-size: 39px;"><br><br>

    <label for="dmessage" style="font-size: 25px; margin-left: 22%;">Product Description:</label>
    <br><textarea id="dmessage" name="dmessage" rows="4" cols="30" style=" margin-left: 22%; width: 50%;"></textarea><br><br><br>

    <label for="pprice" style="font-size: 25px;">Product Price:</label>
    <input type="text" id="pprice" name="pprice"><br><br>

    <label for="qquantity" style="font-size: 25px;">Available Quantity:</label>
    <input type="text" id="qquantity" name="qquantity"><br><br>

    <label for="eevent-date" style="font-size: 25px;">Date:</label>
    <input type="date" id="eevent-date" name="eevent-date" style="font-size: 25px;"><br><br>

    <label for="sstatus" style="font-size: 25px;">Status:</label>
    <input type="text" id="sstatus" name="sstatus"><br><br>

    <div class="add">
        <input type="submit" name="submit" id="submit" value="Add">
    </div>
    <div class="reset">
        <input type="reset" value="Reset">
    </div>
</form>
 <script>
                              document.getElementById('person-form').addEventListener('reset', function() {
                                // Delay the reset to allow form values to reset before showing a confirmation
                                setTimeout(function() {
                                  alert('Form reset!');
                                }, 100);
                              });
                            </script>
                          </div>

                          <div id="apdate-product" class="tab">
                            <!-- Content for the products tab -->
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
    $product_category = $_POST['pcategory'];
    $file_name = $_FILES['fname']['name'];
    $product_description = $_POST['dmessage'];
    $product_price = $_POST['pprice'];
    $available_quantity = $_POST['qquantity'];
    $date = $_POST['eevent-date'];
    $status = $_POST['sstatus'];

    // Prepare the SQL statement using a prepared statement
    $sql = "UPDATE products
    SET product_name = ?,
        product_category = ?,
        file_name = ?,
        description = ?,
        price = ?,
        quantity = ?,
        date = ?,
        status = ?
        WHERE product_ID = ?";
    $stmt = $conn->prepare($sql);
    $stmt->bind_param("ssssdissi", $product_name, $product_category, $file_name, $product_description, $product_price, $available_quantity, $date, $status, $product_ID);

    if ($stmt->execute()) {
        echo "Update successful.";
    } else {
        echo "Error: " . $stmt->error;
    }

    $stmt->close();
    $conn->close();
}
?>

<form style="padding-bottom: 17%;" action="" method="post" id="product" enctype="multipart/form-data">
    <h2>Update a Product</h2>

    <label for="id" style="font-size: 25px;">Product ID:</label>
    <input type="text" id="id" name="id"><br><br>

    <label for="pname" style="font-size: 25px;">Product Name:</label>
    <input type="text" id="pname" name="pname"><br><br>

    <label for="pcategory" style="font-size: 25px;">Product Category:</label>
    <select id="pcategory" name="pcategory" style="font-size: 20px;">
        <option value="choose category">Choose category</option>
        <option value="electronic">Electronic</option>
        <option value="shoes">Shoes</option>
        <option value="clothes">Clothes</option>
        <option value="bags">Bags</option>
        <option value="construction materials">Construction Materials</option>
        <option value="others">Others</option>
        <option value="Home equipments">Home Equipments</option>
        <option value="Beauty & Personal Care">Beauty & Personal Care</option>
        <option value="Sports & Fitness">Sports & Fitness</option>
        <option value="Books & Media">Books & Media</option>
        <option value="Health & Wellness">Health & Wellness</option>
        <option value="Baby & Kids">Baby & Kids</option>
        <option value="Home Appliances">Home Appliances</option>
        <option value="Automotive">Automotive</option>
        <option value="Pet Supplies">Pet Supplies</option>
    </select><br><br>

    <label for="fname" style="font-size: 25px;">Choose File:</label>
    <input type="file" id="fname" name="fname" style="font-size: 39px;"><br><br>

    <label for="dmessage" style="font-size: 25px; margin-left: 22%;">Product Description:</label>
    <br><textarea id="dmessage" name="dmessage" rows="4" cols="30" style=" margin-left: 22%; width: 50%;"></textarea><br><br>

    <label for="pprice" style="font-size: 25px;">Product Price:</label>
    <input type="text" id="pprice" name="pprice"><br><br>

    <label for="qquantity" style="font-size: 25px;">Available Quantity:</label>
    <input type="text" id="qquantity" name="qquantity"><br><br>

    <label for="eevent-date" style="font-size: 25px;">Date:</label>
    <input type="date" id="eevent-date" name="eevent-date" style="font-size: 25px;"><br><br    
    
    <label for="sstatus" style="font-size: 25px;">Status:</label>
    <input type="text" id="sstatus" name="sstatus"><br><br>

    <div class="add">
        <input type="submit" name="submit" id="submit" value="Update">
    </div>
    <div class="reset">
        <input type="reset" value="Reset">
    </div>
</form>
                          </div>


                          <div id="all-products" class="tab">
                          <?php
$database_name = "online shop";
$server_name = "localhost";
$user_name = "root";
$password = ""; // Add your database password here if applicable

$conn = new mysqli($server_name, $user_name, $password, $database_name);

if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}

// Check if the delete button is clicked
if (isset($_GET['delete'])) {
    $product_id = $_GET['delete'];

    // Delete the product from the database
    $delete_stmt = $conn->prepare("DELETE FROM products WHERE product_ID = ?");
    $delete_stmt->bind_param("i", $product_id);
    $delete_stmt->execute();
    $delete_stmt->close();
}

// Retrieve products from the database
$stmt = $conn->prepare("SELECT product_ID, product_name, product_category, file_name, description, price, quantity, date, status FROM products");
$stmt->execute();

$stmt->bind_result($Product_ID, $product_name, $product_category, $file_name, $product_description, $product_price, $available_quantity, $date, $status);

echo '<table style="height: auto; width: 100%; margin-top:16px; margin-left: 0%;" border="1">
<thead>
<tr>
  <th>product_ID</th>
  <th>product_name</th>
  <th>product_category</th>
  <th>File Name</th>
  <th>Description</th>
  <th>Price</th>
  <th>Quantity</th>
  <th>Date</th>
  <th>Status</th>
  <th>Action</th>
</tr>
</thead>
<tbody>';

while ($stmt->fetch()) {
    
  echo '<tr>
    <td>'.$Product_ID.'</td>
    <td>'.$product_name.'</td>
    <td>'.$product_category.'</td>
    <td>'.$file_name.'</td>
    <td>'.$product_description.'</td>
    <td>'.$product_price.'</td>
    <td>'.$available_quantity.'</td>
    <td>'.$date.'</td>
    <td>'.$status.'</td>
    <td>
      <a href="#" class="edit"><i class="fas fa-edit"></i></a>
      <a href="?delete='.$Product_ID.'" class="delete"><i class="fas fa-trash"></i></a>
    </td>
  </tr>';
}

echo '</tbody>
</table>';

// Close the prepared statement
$stmt->close();

// Close the database connection
$conn->close();
?>
                          </div>



                          <div id="update-client" class="tab">

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
    $client_ID = $_POST["ID"];
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
    $sql = "UPDATE client 
    SET client_name = ?,
    phone_number = ?,
    district = ?,
    sector = ?,
    cell = ?,
    village = ?,
    email = ?,
    gender = ?,
    password = ?
    WHERE client_id = ?";
    
    $stmt = $conn->prepare($sql);
    $stmt->bind_param("sssssssssi", $client_name, $phone_number, $district, $sector, $cell, $village, $email, $gender, $password, $client_ID);

    if ($stmt->execute()) {
        // The client was updated successfully
    } else {
        echo "Error: " . $stmt->error;
    }

    $stmt->close();
    $conn->close();
}
?>

<form style="padding-bottom: 17%;" action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]); ?>" method="post" id="client-form">
    <h2>Update a Client</h2>

    <label for="ID" style="font-size: 25px;">Client ID:</label>
    <input type="text" id="ID" name="ID"><br><br>

    <label for="cname" style="font-size: 25px;">Client Name:</label>
    <input type="text" id="cname" name="cname"><br><br>

    <label for="cclient_phone_number" style="font-size: 25px;">Phone Number:</label>
    <input type="text" id="cclient_phone_number" name="cclient_phone_number"><br><br>

    <label for="cclient_district" style="font-size: 25px;">District:</label>
    <input type="text" id="cclient_district" name="cclient_district"><br><br>

    <label for="cclient_sector" style="font-size: 25px;">Sector:</label>
    <input type="text" id="cclient_sector" name="cclient_sector"><br><br>

    <label for="cclient_cell" style="font-size: 25px;">Cell:</label>
    <input type="text" id="cclient_cell" name="cclient_cell"><br><br>

    <label for="cclient_village" style="font-size: 25px;">Village:</label>
    <input type="text" id="cclient_village" name="cclient_village"><br><br>

    <label for="cclient_email" style="font-size: 25px;">Email:</label>
    <input type="email" id="cclient_email" name="cclient_email"><br><br>

    <label for="cclient_gender" style="font-size: 25px;" >Gender:</label>
    <select style="font-size: 20px;" name="cclient_gender" id="cclient_gender">
        <option value="">Choose sex</option>
        <option value="M">M</option>
        <option value="F">F</option>
        <option value="Other">Other</option>
    </select><br><br><br>

    <label for="cclient_password" style="font-size: 25px;">Password:</label>
    <input type="password" id="cclient_password" name="cclient_password" required><br><br>
    <div class="add">
        <input type="submit" name="update" value="Update">
    </div>
    <div class="reset">
        <input type="reset" value="Reset">
    </div>
</form>
                          </div>

 
                          <div id="clients" class="tab">
                          
                          <?php
$database_name = "online shop";
$server_name = "localhost";
$user_name = "root";
$password = ""; // Add your database password here if applicable

$conn = new mysqli($server_name, $user_name, $password, $database_name);

if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}

// Check if a client delete request was made
if (isset($_GET['delete_client']) && !empty($_GET['delete_client'])) {
    $client_id = $_GET['delete_client'];
    
    // Delete the client from the database
    $delete_stmt = $conn->prepare("DELETE FROM client WHERE client_ID = ?");
    $delete_stmt->bind_param("s", $client_id);
    $delete_stmt->execute();
    
    // Check if the deletion was successful
    if ($delete_stmt->affected_rows > 0) {
        echo "Client deleted successfully.";
    } else {
        echo "Failed to delete client.";
    }
    
    // Close the delete statement
    $delete_stmt->close();
}

// Retrieve clients from the database
$stmt = $conn->prepare("SELECT client_ID, client_name, phone_number, district, sector, cell, village, email, gender FROM client");
$stmt->execute();

$stmt->bind_result($client_ID, $client_name, $phone_number, $district, $sector, $cell, $village, $email, $gender);

echo '<table style="height: auto; width: 100%; margin-top:16px; margin-left: 0%;" border="1">
<thead>
  <tr>
    <th>Client ID</th>
    <th>Client Name</th>
    <th>Phone Number</th>
    <th>District</th>
    <th>Sector</th>
    <th>Cell</th>
    <th>Village</th>
    <th>Email</th>
    <th>Gender</th>
    <th>Action</th>
  </tr>
</thead>
<tbody>';

while ($stmt->fetch()) {
    echo '<tr>
            <td>'.$client_ID.'</td>
            <td>'.$client_name.'</td>
            <td>'.$phone_number.'</td>
            <td>'.$district.'</td>
            <td>'.$sector.'</td>
            <td>'.$cell.'</td>
            <td>'.$village.'</td>
            <td>'.$email.'</td>
            <td>'.$gender.'</td>
             <td>
                <a href="#" class="edit"><i class="fas fa-edit"></i></a>
                <a href="?delete_client='.$client_ID.'" class="delete"><i class="fas fa-trash"></i></a>
            </td>
          </tr>';
}

echo '</tbody>
</table>';

// Close the prepared statement
$stmt->close();

// Close the database connection
$conn->close();
?>

  
        </div>
                           

                          <div id="approved_orders" class="tab">
                            <p>
                            <?php
$database_name = "online shop"; // Updated database name (removed spaces)
$server_name = "localhost";
$user_name = "root";
$password = ""; // Add your database password here if applicable

// Create a new connection
$conn = new mysqli($server_name, $user_name, $password, $database_name);

// Check the connection
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}

// Check if the "Restore" button is clicked
if (isset($_POST["restore"])) {
    $file_name = $_POST["file_name"];
    $product_name = $_POST["product_name"];
    $description = $_POST["description"];
    $price = $_POST["price"];

    // Insert the product information into the "orders" table
    $stmt = $conn->prepare("INSERT INTO orders (file_name, order_name, description, price) VALUES (?, ?, ?, ?)");
    $stmt->bind_param("sssd", $file_name, $product_name, $description, $price);
    $stmt->execute();
    $stmt->close();

    // Delete the product from the "approved_orders" table
    $stmt = $conn->prepare("DELETE FROM approved_orders WHERE order_name = ?");
    $stmt->bind_param("s", $product_name);
    $stmt->execute();
    $stmt->close();

    // Redirect back to the same page to prevent form resubmission
    echo '<script>window.location.href = "' . $_SERVER["PHP_SELF"] . '";</script>';
    exit();
}

// Start output buffering
ob_start();

// Retrieve products from the approved_orders table
$stmt = $conn->prepare("SELECT * FROM approved_orders");
$stmt->execute();
$result = $stmt->get_result();

// Insert products into the HTML
while ($row = $result->fetch_assoc()) {
    $file_name = $row['file_name'];
    $product_name = $row['order_name'];
    $description = $row['description'];
    $price = $row['price'];

    echo '
    <div class="card1">
        <div class="card1-details">
            <img src="images/' . $file_name . '" alt="Product Image">
            <h3>' . $product_name . '</h3>
            <p>' . $description . '</p>
            <p style="color: green;" class="price">$' . $price . '</p>
            <form action="' . $_SERVER["PHP_SELF"] . '" method="post" style="display:inline;">
                <input type="hidden" name="file_name" value="' . $file_name . '">
                <input type="hidden" name="product_name" value="' . $product_name . '">
                <input type="hidden" name="description" value="' . $description . '">
                <input type="hidden" name="price" value="' . $price . '">
                <button type="submit" name="restore" style="background-color:white; width: 110px; margin-left: 28%;">
                    <b style="font-size: 25px; color: green;">Restore</b>
                </button>
            </form>
        </div>
    </div>
    ';
}

// End output buffering and flush the buffer
ob_end_flush();

// Close the prepared statement and database connection
$stmt->close();
$conn->close();
?>
</p>
                          </div>

                          <div id="pending" class="tab">
                            <p>
                            <?php
$database_name = "online shop"; // Updated database name (removed spaces)
$server_name = "localhost";
$user_name = "root";
$password = ""; // Add your database password here if applicable

// Create a new connection
$conn = new mysqli($server_name, $user_name, $password, $database_name);

// Check the connection
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}

// Handle form submissions
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $product_name = $_POST["product_name"];

    if (isset($_POST["approve"])) {
        // Retrieve product information from the "orders" table
        $stmt = $conn->prepare("SELECT file_name, order_name, description, price FROM orders WHERE order_name = ?");
        $stmt->bind_param("s", $product_name);
        $stmt->execute();
        $stmt->bind_result($file_name, $product_name, $description, $price);
        $stmt->fetch();
        $stmt->close();

        // Insert the approved product into the "approved_orders" table
        $stmt = $conn->prepare("INSERT INTO approved_orders (file_name, order_name, description, price) VALUES (?, ?, ?, ?)");
        $stmt->bind_param("sssd", $file_name, $product_name, $description, $price);
        $stmt->execute();
        $stmt->close();

        // Delete the product from the "orders" table
        $stmt = $conn->prepare("DELETE FROM orders WHERE order_name = ?");
        $stmt->bind_param("s", $product_name);
        $stmt->execute();
        $stmt->close();
    } elseif (isset($_POST["reject"])) {
        // Retrieve product information from the "orders" table
        $stmt = $conn->prepare("SELECT file_name, product_name, description, price FROM orders WHERE product_name = ?");
        $stmt->bind_param("s", $product_name);
        $stmt->execute();
        $stmt->bind_result($file_name, $product_name, $description, $price);
        $stmt->fetch();
        $stmt->close();

        // Insert the rejected product into the "rejected_orders" table
        $stmt = $conn->prepare("INSERT INTO rejected_orders (file_name, order_name, description, price) VALUES (?, ?, ?, ?)");
        $stmt->bind_param("sssd", $file_name, $product_name, $description, $price);
        $stmt->execute();
        $stmt->close();

        // Delete the product from the "orders" table
        $stmt = $conn->prepare("DELETE FROM orders WHERE product_name = ?");
        $stmt->bind_param("s", $product_name);
        $stmt->execute();
        $stmt->close();
    }
}

// Retrieve electronic products from the database
$stmt = $conn->prepare("SELECT file_name, order_name, description, price FROM orders");
$stmt->execute();
$stmt->bind_result($file_name, $product_name, $description, $price);

while ($stmt->fetch()) {
    echo '
    <div class="card1">
        <div class="card1-details">
        <img src="images/' . $file_name . '" alt="Product Image">
            <h3>' . $product_name . '</h3>
            <p>' . $description . '</p>
            <p style="color: green;" class="price">$' . $price . '</p>
            <form action="" method="post" style="display:inline;">
                <input type="hidden" name="product_name" value="' . $product_name . '">
                <button type="submit" name="approve" style="background-color:white; margin-left: 5%;">
                    <b style="font-size:25px; color: green;">approve</b>
                </button>
            </form>
            <form action="" method="post" style="display:inline;">
                <input type="hidden" name="product_name" value="' . $product_name . '">
                <button type="submit" name="reject" style="background-color:white; width: 100px;">
                    <b style="font-size: 25px; color: red;">reject</b>
                </button>
            </form>
        </div>
    </div>
    ';
}

// Close the prepared statement
$stmt->close();

// Close the database connection
$conn->close();
?>

                            </p>
                          </div>

                          <div id="rejected_orders" class="tab">
                            <p><?php
$database_name = "online shop"; // Updated database name (removed spaces)
$server_name = "localhost";
$user_name = "root";
$password = ""; // Add your database password here if applicable

// Create a new connection
$conn = new mysqli($server_name, $user_name, $password, $database_name);

// Check the connection
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}

// Retrieve products from the approved_orders table
$stmt = $conn->prepare("SELECT * FROM rejected_orders");
$stmt->execute();
$result = $stmt->get_result();

// Insert products into the HTML
while ($row = $result->fetch_assoc()) {
    $file_name = $row['file_name'];
    $product_name = $row['order_name'];
    $description = $row['description'];
    $price = $row['price'];

    echo '
    <div class="card1">
        <div class="card1-details">
            <img src="images/' . $file_name . '" alt="Product Image">
            <h3>' . $product_name . '</h3>
            <p>' . $description . '</p>
            <p style="color: green;" class="price">$' . $price . '</p>
            <button style="background-color:white; width: 110px; margin-left: 28%;">
            <b style="font-size: 25px; color: green;">Restore</b>
        </div>
    </div>
    ';
}

// Close the prepared statement and database connection
$stmt->close();
$conn->close();
?></p>
                          </div>

                          <div id="users" class="tab">
                            
<form style="padding-bottom: 17%;" action="addclient.php" method="post" id="client-form">
    <h2>Add a client</h2>

    <label for="cclient_id" style="font-size: 25px;">Client_ID:</label>
    <input type="text" id="cclient_id" name="cclient_id"><br><br>

    <label for="cname" style="font-size: 25px;">Client Name:</label>
    <input type="text" id="cname" name="cname"><br><br>

    <label for="cclient_phone_number" style="font-size: 25px;">Phone Number:</label>
    <input type="text" id="cclient_phone_number" name="cclient_phone_number"><br><br>

    <label for="cclient_district" style="font-size: 25px;">District:</label>
    <input type="text" id="cclient_district" name="cclient_district"><br><br>

    <label for="cclient_sector" style="font-size: 25px;">Sector:</label>
    <input type="text" id="cclient_sector" name="cclient_sector"><br><br>

    <label for="cclient_cell" style="font-size: 25px;">Cell:</label>
    <input type="text" id="cclient_cell" name="cclient_cell"><br><br>

    <label for="cclient_village" style="font-size: 25px;">Village:</label>
    <input type="text" id="cclient_village" name="cclient_village"><br><br>

    <label for="cclient_email" style="font-size: 25px;">Email:</label>
    <input type="email" id="cclient_email" name="cclient_email"><br><br>

    <label for="cclient_gender" style="font-size: 25px;" >Gender:
    <select style="font-size: 20px;" name="cclient_gender" id="cclient_gender">
      <option>choose sex</option>
      <option>M</option>
      <option>F</option>
      <option>Others</option>
    </select></label>
    <br><br><br>

    <label for="cclient_password" style="font-size: 25px;">Password:</label>
    <input type="password" id="cclient_password" name="cclient_password" required><br><br>
    <div class="add">
        <input type="submit" name="add" value="Add">
    </div>
    <div class="reset">
        <input type="reset" value="Reset">
    </div>
</form>       <script>
                              document.getElementById('person-form').addEventListener('reset', function() {
                                // Delay the reset to allow form values to reset before showing a confirmation
                                setTimeout(function() {
                                  alert('Form reset!');
                                }, 100);
                              });
                            </script>
                          </div>
                          <script>
                            // Show the default tab (e.g., dashboard) on page load
                            openTab('dashboard');
                          </script>
</div>
</div>
</body>
</html>
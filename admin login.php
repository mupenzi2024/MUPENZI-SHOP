<!DOCTYPE html>
<html>
<head>
    <title>Login Form</title>
    <style>
        body {
            background-color: #f2f2f2;
            font-family: Arial, sans-serif;
            overflow-y: scroll;
        }
        
        .navbar {
            margin-top: -1%;
            height: 80px;
            width: 100%;
        }
        
        .navbar .table {
            position: fixed;
            height: 80px;
            width: 20%;
            margin-left: 92%;
            margin-top: 1%;
        }
        
        .logo {
            background-color: aliceblue;
            position: fixed;
            height: 80px;
            width: 100%;
            float: left;
        }
        
        .table button {
            height: 50px;
            margin-top: -20%;
        }
        
        .container {
            max-width: 400px;
            margin: 20%;
            margin-top: 15%;
            margin-left: 32%;
            padding: 20px;
            background-color: #fff;
            border-radius: 5px;
            box-shadow: 0 0 10px rgba(0, 0, 0, 0.2);
        }
        
        .container h2 {
            text-align: center;
        }
        
        .form-group label {
            font-size: 18px;
        }
        
        .form-group input {
            display: block;
            width: 100%;
            padding: 5px;
            font-size: 16px;
            margin-bottom: 10px;
        }
        
        .form-group button {
            padding: 10px 20px;
            background-color: #4CAF50;
            color: white;
            font-size: 16px;
            border: none;
            cursor: pointer;
        }
        
        .form-group button.forgot-password {
            background-color: #f44336;
            margin-left: 10px;
        }
    </style>
</head>
<body>
    <div class="navbar">
        <div class="logo">
            <img src="images/logo1.jpg" height="80px" width="20%">
            <b style="margin-left: 22%; font-size: 35px;">ADMIN LOGIN</b>
        </div>
    
        <div class="table">
            <table style="height: 80px; width: 50%;">
                <tr>
                    <td>
                        <a style="text-decoration: none; color: black;" href="admin login.html">
                            <button style="border-radius: 12px; font-size: 32px;"><a style="text-decoration: none; color: black;" href="admin login.php">
                            login</a></button>
                        </a>
                    </td>
                </tr>
            </table>
        </div>
    </div>
    
    <div class="container">
        <h2>Login Form</h2>
        <?php
// Check if the form is submitted
if (isset($_POST["login"])) {
    // Get the form data
    $username = $_POST['username'];
    $password = $_POST['password'];

    // Validate the username and password (you can add more validation if needed)
    if (!empty($username) && !empty($password)) {
        // Perform database query to check if the username and password exist in the "users" table
        $servername = "localhost";
        $dbname = "online shop"; // Removed space from the database name
        $dbusername = "root";
        $dbpassword = "";

        // Create a new connection
        $conn = new mysqli($servername, $dbusername, $dbpassword, $dbname);

        // Check connection
        if ($conn->connect_error) {
            die("Connection failed: " . $conn->connect_error);
        }

        // Prepare the SQL statement (use prepared statements to prevent SQL injection)
        $stmt = $conn->prepare("SELECT user_name, password FROM users WHERE user_name = ? AND password = ?"); // Changed "Password" to "password"
        $stmt->bind_param("ss", $username, $password);
        $stmt->execute();
        $result = $stmt->get_result();

        if ($result->num_rows > 0) {
            // User is authenticated, redirect to the dashboard page
            header("Location: dashbord.php");
            exit();
        } else {
            // Invalid credentials
            $error = "Invalid username or password";
        }

        // Close the database connection
        $stmt->close();
        $conn->close();
    } else {
        // Empty username or password
        $error = "Please enter both username and password";
    }
    if (isset($error)) {
        echo "This account does not exist. Please check your login information.";
    }
}
?>

<form method="post"> <!-- Added method="post" to the form -->
    <div class="form-group">
        <label for="username">Username:</label>
        <input type="text" id="username" name="username" placeholder="username" required>
    </div>

    <div class="form-group">
        <label for="password">Password:</label>
        <input type="password" id="password" name="password" placeholder="password" required>
    </div>

    <div class="form-group">
        <button type="submit" name="login">Login</button> <!-- Added name="login" to the login button -->
        <button type="button" class="forgot-password">Forgot Password</button>
    </div>
</form>
    </div>
</body>
</html>
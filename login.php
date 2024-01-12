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
    margin-top: 10%;
}
.form{

    margin-left: 30%;
    height: 450px;
    width: 480px;
    border-radius: 12px;
    background-color: steelblue;
}
.form .inputbox input{
    margin-top: 3%;
    border-radius: 12px;
    height: 50px;
    width: 65%;
    margin-left: 2%;
}
.form .inputbox .forgot input:hover{
    background-image: url(images/bg3.jpg);  
}
.form .login input{
    margin-top: 60px;
    border-radius: 12px;
    height: 50px;
    width: 65%;
    margin-left: 2%;
    }
    .form .login input:hover{
        background-image: url(images/bg3.jpg);
        
}
.form h1{
    background-color: peru;
    border-radius: 12px;
    }

        </style>
        <title>login form</title>
    </head>
    <body>
        <p style="font-size: 40px; color: black; text-align: center; margin-top: -5%;"><b><br><br><br> 
            <b style="font-size: 60px;"><i>w</i></b>elcome to our online shopping site</b></p>
        <div class="buy">
                        <div class="form">
                            <h1>signin to continue</h1>

                            <?php
// Check if the form is submitted
if (isset($_POST["login"]) ){
    // Get the form data
    $username = $_POST['username'];
    $password = $_POST['password'];

    // Validate the username and password (you can add more validation if needed)
    if (!empty($username) && !empty($password)) {
        // Perform database query to check if the username and password exist in the "manager" table
        $servername = "localhost";
        $dbname = "online shop";
        $dbusername = "root";
        $dbpassword = "";

        // Create a new connection
        $conn = new mysqli($servername, $dbusername, $dbpassword, $dbname);

        // Check connection
        if ($conn->connect_error) {
            die("Connection failed: " . $conn->connect_error);
        }

        // Prepare the SQL statement (use prepared statements to prevent SQL injection)
        $stmt = $conn->prepare("SELECT client_name, password FROM client WHERE client_name = ? AND Password = ?");
        $stmt->bind_param("ss", $username, $password);
        $stmt->execute();
        $result = $stmt->get_result();

        if ($result->num_rows > 0) {
            // User is authenticated, redirect to the dashboard page
            header("Location: buying.php");
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
    
    // Display an error message if the account does not exist
    if (isset($error)) {
        echo "This account does not exist. Please check your login information.";
    }
}
?>

                            <form method="POST">
                                <div class="inputbox">
                                <input style="font-size: 25px; font-style: italic;" type="text" placeholder="username" name="username" required>
                                </div>
                                <div class="inputbox">
                                    <input style="font-size: 25px; font-style: italic;" type="password" placeholder="enter password" name="password" required>
                                </div>
                                <div class="inputbox">
                                <div class="login">
                                    <input style="font-size: 25px;" type="submit" name="login" value="login">
                                </div>
                                <div class="forgot">
                                    <input style="font-size: 25px;" type="submit"  value="forgot password">
                                </div>
                                </div>
                            </form>
                             
                        </div>

        </div>
    </body>
</html>
<?php
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    // Database connection parameters
    $servername = "localhost";
    $username = "root";
    $password = "";
    $dbname = "spidey";

    // Create a connection
    $conn = new mysqli($servername, $username, $password, $dbname);

    // Check the connection
    if ($conn->connect_error) {
        die("Connection failed: " . $conn->connect_error);
    }

    // Function to sanitize input data
    function sanitizeInput($data) {
        $data = trim($data);
        $data = stripslashes($data);
        $data = htmlspecialchars($data);
        return $data;
    }

    // Process signup form data
    if (isset($_POST['signup'])) {
        $username = sanitizeInput($_POST['txt']);
        $email = sanitizeInput($_POST['email']);
        $password = password_hash($_POST['pswd'], PASSWORD_DEFAULT);

        // Insert data into the database
        $sql = "INSERT INTO users (username, email, password) VALUES ('$username', '$email', '$password')";

        if ($conn->query($sql) === TRUE) {
            echo '<script>alert("Sign up successful");</script>';
        } else {
            echo "Error: " . $sql . "<br>" . $conn->error;
        }
    }

    // Process login form data
    if (isset($_POST['login'])) {
        $email = sanitizeInput($_POST['email']);
        $passwordInput = $_POST['pswd']; // Do not sanitize the password

        // Retrieve user from the database
        $sql = "SELECT * FROM users WHERE email='$email'";
        $result = $conn->query($sql);

        if ($result->num_rows > 0) {
            $row = $result->fetch_assoc();
            if (password_verify($passwordInput, $row['password'])) {
                echo '<script>alert("Login successful"); window.location.href = "index11.php";</script>';
            } else {
                echo '<script>alert("Invalid password");</script>';
            }
        } else {
            echo '<script>alert("User not found");</script>';
        }
    }

    // Close the connection
    $conn->close();
}
?>
<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <link href="https://fonts.googleapis.com/css2?family=Jost:wght@500&display=swap" rel="stylesheet">
  <link rel="stylesheet" type="text/css" href="login.css">
  <title>Document</title>
</head>
<body>
  <div class="main">  	
		<input type="checkbox" id="chk" aria-hidden="true">

			<!-- Add action attribute to the forms -->
<div class="signup">
    <form action="" method="post">
        <label for="chk" aria-hidden="true">Sign up</label>
        <input type="text" name="txt" placeholder="User name" required="">
        <input type="email" name="email" placeholder="Email" required="">
        <input type="password" name="pswd" placeholder="Password" required="">
        <button name="signup" type="submit">Sign up</button>
    </form>
</div>

<div class="login">
    <form action="" method="post">
        <label for="chk" aria-hidden="true">Login</label>
        <input type="email" name="email" placeholder="Email" required="">
        <input type="password" name="pswd" placeholder="Password" required="">
        <button name="login" type="submit">Login</button>
    </form>
</div>

  
</body>
</html>
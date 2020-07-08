<?php

$con = mysqli_connect('localhost', 'root', '', 'awesome_shop');
// Initialize the session
session_start();
 
// Check if the user is already logged in, if yes then redirect him to welcome page
if(isset($_SESSION["loggedin"]) && $_SESSION["loggedin"] === true){
    header("location: index.php");
    exit;
}
 
// Include config file
require_once './database/connection.php';
 
// Define variables and initialize with empty values
$email = $password = "";
$email_err = $password_err = "";
 
// Processing form data when form is submitted
if($_SERVER["REQUEST_METHOD"] == "POST"){
 
    // Check if email is empty
    if(empty(trim($_POST["email"]))){
        $email_err = "Please enter email.";
    } else{
        $email = trim($_POST["email"]);
    }
    
    // Check if password is empty
    if(empty(trim($_POST["password"]))){
        $password_err = "Please enter your password.";
    } else{
        $password = trim($_POST["password"]);
    }
    
    // Validate credentials
    if(empty($email_err) && empty($password_err)){
        // Prepare a select statement
        $sql = "SELECT id, email, password FROM users WHERE email = ?";
        
        if($stmt = mysqli_prepare($con, $sql)){
            // Bind variables to the prepared statement as parameters
            mysqli_stmt_bind_param($stmt, "s", $param_email);
            
            // Set parameters
            $param_email = $email;
            
            // Attempt to execute the prepared statement
            if(mysqli_stmt_execute($stmt)){
                // Store result
                mysqli_stmt_store_result($stmt);
                
                // Check if email exists, if yes then verify password
                if(mysqli_stmt_num_rows($stmt) == 1){                    
                    // Bind result variables
                    mysqli_stmt_bind_result($stmt, $id, $email, $hashed_password);
                    if(mysqli_stmt_fetch($stmt)){
                        if(password_verify($password, $hashed_password)){
                            // Password is correct, so start a new session
                            session_start();
                            
                            // Store data in session variables
                            $_SESSION["loggedin"] = true;
                            $_SESSION["id"] = $id;
                            $_SESSION["email"] = $email;                            
                            
                            // Redirect user to welcome page
                            header("location: index.php");
                        } else{
                            // Display an error message if password is not valid
                            $password_err = "The password you entered was not valid.";
                        }
                    }
                } else{
                    // Display an error message if email doesn't exist
                    $email_err = "No account found with that email.";
                }
            } else{
                echo "Oops! Something went wrong. Please try again later.";
            }

            // Close statement
            mysqli_stmt_close($stmt);
        }
    }
    
    // Close connection
    mysqli_close($con);
}
?>


<!DOCTYPE html>
<html lang="en">
<head>
<meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Sign In</title>
  <script src="./assets/links/bootstrap.min.js.download"></script>
    <script src="./assets/links/jquery.min.js.download"></script>
    <script src="./assets/links/popper.min.js.download"></script>
    <script src="./assets/javascript/main.js"></script>
    <link rel="stylesheet" href="./assets/links/bootstrap.min.css">
    <link rel="stylesheet" href="./assets/css/style.css">
    <link rel="stylesheet" href="./assets/css/Signin.css">
</head>
<body>
<nav class="bg-light navbar-light">
    <div class="d-flex">
        <div class="p-2 flex-grow-1 bd-highlight"><a class="text-decoration-none" href="http://localhost/Assignment_2/"><h3>Awesome <span class="text-success">Shop</span></h3></a></div>
        <div class="p-2 bd-highlight"><img class="question-mark" src="/Assignment_2/assets/icons/question.png" alt="question_mark"> </div>
        <div class="p-2 bd-highlight"><a href="#">Need Help</a></div>
        <div class="p-2 "><a href="#" class="p-1 text-dark"><?php echo $email; ?></a></div>
    </div>
</nav>
<div class="container"> 
  <div class="border border-dark pl-5 pr-5">
      <h2 class="header-signin text-success">Welcome Back</h2>
      <p class="header-signin">Login with your email and password</p>
      <br>
     
    <form action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]); ?>" method="POST">

      <div class="form-group <?php echo (!empty($email_err)) ? 'has-error' : ''; ?>">
          <span class="text-danger"><?php echo $email_err; ?></span>    
          <input type="text" name="email" value="<?php echo $email; ?>" class="" placeholder="Your Email">
      </div>


      <div class="form-group <?php echo (!empty($password_err)) ? 'has-error' : ''; ?>">
          <span class="text-danger"><?php echo $password_err; ?></span>  
          <input type="password" name="password" value="<?php ?>" class="" placeholder="Password">
      </div>
          <br>
         
          <input class="bg-success" type="submit" name="continue" value="Continue">
    </form>
      <br>
      <p class="header-signin">Don't have any account? <a class="text-decoration-none" href="http://localhost/Assignment_2/signup.php" class="">Sign up<a></p>
  </div>
  
</div>
</body>
</html>
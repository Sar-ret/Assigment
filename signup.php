<?php

  require_once './database/connection.php';
  $con = mysqli_connect('localhost', 'root', '', 'awesome_shop');
 

  // Define variables and initialize with empty values
    $email = $username = $password = $confirm_password = "";
    $email_err = $username_err = $password_err = $confirm_password_err = "";
    
    // Processing form data when form is submitted
    if($_SERVER["REQUEST_METHOD"] == "POST"){
        // validate name
        if(empty(trim($_POST["username"]))){
            $username_err = "Please enter a name.";     
        } elseif(strlen(trim($_POST["username"])) < 5){
            $username_err = "Name must have atleast 5 characters.";
        } else{
            $sql = "SELECT name FROM users WHERE name = ?";
                $username = trim($_POST["username"]);
                if($stmt = mysqli_prepare($con, $sql)){
                    // Bind variables to the prepared statement as parameters
                    mysqli_stmt_bind_param($stmt, "s", $param_name);
                    
                    // Set parameters
                    $param_name = trim($_POST["username"]);
                }
            }
 
    // Validate email
    if(empty(trim($_POST["email"]))){
        $email_err = "Please enter a email.";
    } else{
        // Prepare a select statement
        $sql = "SELECT email FROM users WHERE email = ?";
        
        if($stmt = mysqli_prepare($con, $sql)){
            // Bind variables to the prepared statement as parameters
            mysqli_stmt_bind_param($stmt, "s", $param_email);
            
            // Set parameters
            $param_email = trim($_POST["email"]);
            
            // Attempt to execute the prepared statement
            if(mysqli_stmt_execute($stmt)){
                /* store result */
                mysqli_stmt_store_result($stmt);
                
                if(mysqli_stmt_num_rows($stmt) == 1){
                    $email_err = "This email is already taken.";
                } else{
                    $email = trim($_POST["email"]);
                }
            } else{
                echo "Oops! Something went wrong. Please try again later.";
            }

            // Close statement
            mysqli_stmt_close($stmt);
        }
    }
    
    // Validate password
    if(empty(trim($_POST["password"]))){
        $password_err = "Please enter a password.";     
    } elseif(strlen(trim($_POST["password"])) < 4){
        $password_err = "Password must have atleast 4 characters.";
    } else{
        $password = trim($_POST["password"]);
    }
    
    // Validate confirm password
    if(empty(trim($_POST["confirm_password"]))){
        $confirm_password_err = "Please confirm password.";     
    } else{
        $confirm_password = trim($_POST["confirm_password"]);
        if(empty($password_err) && ($password != $confirm_password)){
            $confirm_password_err = "Password did not match.";
        }
    }
    
    // Check input errors before inserting in database
    if(empty($name_err) && empty($email_err) && empty($password_err) && empty($confirm_password_err)){
        
        // Prepare an insert statement
        $sql = "INSERT INTO users (name,email, password) VALUES (?, ?, ?)";
         
        if($stmt = mysqli_prepare($con, $sql)){
            // Bind variables to the prepared statement as parameters
            mysqli_stmt_bind_param($stmt, "sss", $param_name, $param_email, $param_password);
            
            // Set parameters
            $param_name = $username;
            $param_email = $email;
            $param_password = password_hash($password, PASSWORD_DEFAULT); // Creates a password hash
            
            // Attempt to execute the prepared statement
            if(mysqli_stmt_execute($stmt)){
                // Redirect to login page
                header("location: signin.php");
            } else{
                echo "Something went wrong. Please try again later.";
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
  <title>Sign Up</title>
  <script src="./assets/links/bootstrap.min.js.download"></script>
    <script src="./assets/links/jquery.min.js.download"></script>
    <script src="./assets/links/popper.min.js.download"></script>
    <script src="./assets/javascript/main.js"></script>
    <link rel="stylesheet" href="./assets/links/bootstrap.min.css">
    <link rel="stylesheet" href="./assets/css/Signin.css">
    <link rel="stylesheet" href="./assets/css/style.css">
</head>
<body>
<nav class="bg-light navbar-light">
    <div class="d-flex">
        <div class="p-2 flex-grow-1 bd-highlight"><a class="text-decoration-none" href="http://localhost/Assignment_2/"><h3>Awesome <span class="text-success">Shop</span></h3></a> </div>
        <div class="p-2 bd-highlight"><img class="question-mark" src="/Assignment_2/assets/icons/question.png" alt="question_mark"> </div>
        <div class="p-2 bd-highlight"><a class="text-decoration-none" href="#">Need Help</a></div>
        <div class="p-2 "><a href="#" class="p-1 text-dark"><?php echo $username ?></a></div>
    </div>
</nav>
<div class="container">
    <div class="border border-dark pl-5 pr-5">
        <h2 class="header-signin text-success">Sign Up</h2>
        <p class="header-signin">By signing up, you agree Awesome shop's Term & Condition</p>
<br>
        <form action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]); ?>" method="POST" class="form">
        <div class="form-group <?php echo (!empty($username_err)) ? 'has-error' : ''; ?>">
            <span class="text-danger"><?php echo $username_err; ?></span>
            <input type="text" name="username" value="<?php echo $username;  ?>" class="" placeholder=" Name">
            
        </div> 
        <div class="form-group <?php echo (!empty($email_err)) ? 'has-error' : ''; ?>">
            <span class="text-danger"><?php echo $email_err; ?></span>
            <input type="email" name="email" value="<?php echo $email; ?>" class="" placeholder="Your Email" require>
        </div>
          <div class="form-group <?php echo (!empty($password_err)) ? 'has-error' : ''; ?>">
            <span class="text-danger"><?php echo $password_err; ?></span>
            <input type="password" name="password" value="<?php echo $password; ?>" class="" placeholder="Password">
          </div>


          <div class="form-group <?php echo (!empty($confirm_password_err)) ? 'has-error' : ''; ?>">
            <span class="text-danger"><?php echo $confirm_password_err; ?></span>
            <input type="password" name="confirm_password" value="<?php echo $confirm_password; ?>" class="" placeholder="Confirm Password">  
          </div>
            <br>
            <input class="bg-success" type="submit" name="submit" value="Continue">
        </form>
        <br>
        <p class="header-signin">Already have an account? <a class="text-decoration-none" href="http://localhost/Assignment_2/signin.php" class="singin">Sign in<a></p>
    </div>
</div>
</body>
</html>
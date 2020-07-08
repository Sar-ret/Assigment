<?php
session_start();
$email ="Join";
if (isset($_SESSION["email"])){
    $email = $_SESSION["email"];
}

?>
<nav class="bg-light navbar-light">
    <div class="d-flex">
        <div class="p-2 flex-grow-1 bd-highlight"><a class="text-decoration-none" href="http://localhost/Assignment_2/"><h3>Awesome <span class="text-success">Shop</span></h3></a></div>
        <div class="p-2 bd-highlight"><img class="question-mark" src="/Assignment_2/assets/icons/question.png" alt="question_mark"> </div>
        <div class="p-2 bd-highlight"><a class="text-decoration-none" href="#">Need Help</a></div>
        <div class="p-2 "><a href="http://localhost/Assignment_2/signin.php" class="border border-dark p-1 rounded bg-primary text-dark text-decoration-none"><?php echo $email; ?></a></div>
    </div>
</nav>
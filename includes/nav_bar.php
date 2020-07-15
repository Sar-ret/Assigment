<?php

session_start();
$email ="Join";
$isJoint = false;
if (isset($_SESSION["email"])){
    $email = $_SESSION["email"];
    $isJoint = true;
} else {
  $isJoint = false;
  $email ="Join";
}

?>

<nav class="navbar navbar-expand navbar-light bg-light">
  <div class="collapse navbar-collapse" id="navbarNavDropdown">
    <a class="nav-link" href="http://localhost/Assignment_2/">
      <h3>Awesome <span class="text-success">Shop</span></h3> 
      
    </a>

    <ul class="navbar-nav ml-auto">
      <li class="nav-item">
        <a href="#" class="nav-link"><img class="question-mark" src="/Assignment_2/assets/icons/question.png" alt="question_mark"> Need Help</a>
      </li>
      <?php if($isJoint):?>
        <li class="nav-item dropdown">
          <a class="nav-link dropdown-toggle" href="#" id="navbarDropdownMenuLink" role="button"
            data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
            <?php echo $email; ?>
          </a>
          <div class="dropdown-menu" aria-labelledby="navbarDropdownMenuLink">
            <a class="dropdown-item" href="/Assignment_2/logout.php">Logout</a>
          </div>
        </li>
      <?php else: ?>
        <div class="p-2 "><a href="/Assignment_2/signin.php" class="p-1 text-dark"><?php echo $email; ?></a></div>
      <?php endif; ?>
    </ul>
  </div>
</nav>

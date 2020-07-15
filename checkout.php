
<?php
    require_once './database/connection.php';
?>

<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <script src="./assets/links/popper.min.js.download"></script>
    <script src="./assets/links/jquery.min.js.download"></script>
    <script src="./assets/links/bootstrap.min.js.download"></script>
    <link rel="stylesheet" href="./assets/links/bootstrap.min.css">
    <script src="./assets/javascript/main.js"></script>
    <link rel="stylesheet" href="./assets/css/style.css">
  <title>Checkout</title>
</head>
<body> 
        <?php include './includes/nav_bar.php';?>
    <br><br>
  <div class="container border border-dark ">
    <!-- Feature Section -->
          <h4 class="text-center text-success">Checkout</h4>
        <h6 class="text-success"> Items</h6>
    <ul class="list-unstyled">
          <li class="media">
              <img src="./assets/icons/question.png" class="mr-3 category-icon" alt="...">
            <div class="media-body">
              <h5 class="mt-0 mb-1">Title</h5>
              <h3 class="float-right d-inline">price</h3>
                <span>price</span>  <br>
                <form>
                  <div class="form-row align-items-center">
                    <div class="col-auto my-1">
                      <select class="custom-select mr-sm-2" id="inlineFormCustomSelect">
                        <option selected>1</option>
                        <option value="2">2</option>
                        <option value="3">3</option>
                        <option value="4">4</option>
                        <option value="5">5</option>
                        <option value="6">6</option>
                        <option value="7">7</option>
                        <option value="8">8</option>
                        <option value="9">9</option>
                        <option value="10">10</option>
                      </select>
                    </div>
                </form>
            </div>
          </li>
          <li class="media my-4">
              <img src="./assets/icons/question.png" class="mr-3 category-icon" alt="...">
            <div class="media-body">
              <h5 class="mt-0 mb-1">Title</h5>
              <h3 class="float-right d-inline">price</h3>
                  <span>price</span> <br> 
                  <form>
                    <div class="form-row align-items-center">
                      <div class="col-auto my-1">
                        <select class="custom-select mr-sm-2" id="inlineFormCustomSelect">
                          <option selected>1</option>
                          <option value="2">2</option>
                          <option value="3">3</option>
                          <option value="4">4</option>
                          <option value="5">5</option>
                          <option value="6">6</option>
                          <option value="7">7</option>
                          <option value="8">8</option>
                          <option value="9">9</option>
                          <option value="10">10</option>
                        </select>
                      </div>
                  </form>
            </div>
          </li>
          <li class="media">
              <img src="./assets/icons/question.png" class="mr-3 category-icon" alt="...">
            <div class="media-body">
              <h5 class="mt-0 mb-1">Title</h5>
              <h3 class="float-right d-inline">price</h3>
                  <span>price</span>  <br>
                  <form>
                    <div class="form-row align-items-center">
                      <div class="col-auto my-1">
                        <select class="custom-select mr-sm-2" id="inlineFormCustomSelect">
                          <option selected>1</option>
                          <option value="2">2</option>
                          <option value="3">3</option>
                          <option value="4">4</option>
                          <option value="5">5</option>
                          <option value="6">6</option>
                          <option value="7">7</option>
                          <option value="8">8</option>
                          <option value="9">9</option>
                          <option value="10">10</option>
                        </select>
                      </div>
                  </form>
            </div>
          </li>
    </ul>
    <button type="button" class="btn btn-success btn-sm btn-block mt-5 mb-2"><span class="float-left mt-2 checkout">Checkout </span>   <span class="bg-white text-dark p-2 rounded float-right ">$price</span></button>
  </div>


</body>
</html>
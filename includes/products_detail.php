<?php

require ('../database/connection.php');
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <script src="/Assignment_2/assets/links/popper.min.js.download"></script>
    <script src="/Assignment_2/assets/links/jquery.min.js.download"></script>
    <script src="/Assignment_2/assets/links/bootstrap.min.js.download"></script>
    <script src="/Assignment_2/assets/javascript/main.js"></script>
    <link rel="stylesheet" href="/Assignment_2/assets/links/bootstrap.min.css">
    <link rel="stylesheet" href="/Assignment_2/assets/css/style2.css">
    <title>products detail</title>
</head>

<body>

    <!-- Navbar -->
        <?php   include './nav_bar.php';?>
    <!-- Feature Section -->
        <?php    include './feature.php';?>
    <div class="container">

        <!-- Promotion-Section -->
        <?php   include './promotion.php';?>
        <br>
        <div class="row" >
            <!-- category section -->
            <?php
    
    $categories = query("select * FROM categories; ");
    $ca = $categories -> fetch_array(MYSQLI_NUM);
    $count = 1;
?>
            <div class="col-3 ">   
                <ul class="nav flex-column nav-tabs ">
                    <?php
                        foreach($categories as $cate_icon):
                            if($count == 1){
                                echo '
                           
                                    <li class="nav-item mb-1 text_category active" id="'.$cate_icon['name'].'" >
                                        <a class="nav-link" href="/Assignment_2"><img class="category-icon" src="/Assignment_2/assets/icons/'.$cate_icon['icon'].'" alt="laptop">'.$cate_icon['name'].'</a>
                                    </li>  
                             ';
                            }else {
                                echo '
                           
                                    <li class="nav-item mb-1 text_category" id="'.$cate_icon['name'].'" >
                                        <a class="nav-link" href="/Assignment_2"><img class="category-icon" src="/Assignment_2/assets/icons/'.$cate_icon['icon'].'" alt="laptop">'.$cate_icon['name'].'</a>
                                    </li>  
                             ';
                            }
                            $count++;
                        endforeach;
                    ?>
                </ul>
            </div>

   

            <!-- product Section -->
            <div class="col-md-9 background">
                <div class="row">
                    <div class="row border border-secondary mt-5">
                        <?php
                    $products = "select * from products p join assets a on p.id = a.product_id where p.id= ".$_GET["id"];
                    $pros = query($products);
                
                foreach($pros as $pro_detail):
                    $dis_count = ((100 - $pro_detail['discount']) * $pro_detail['price']/100);
                    echo '
                <div class="col-sm-5">
                    <div class="d-flex flex-column bd-highlight mb-3">
                        <div class="p-2 bd-highlight ">
                            <h5 class="position-absolute title-detail bg-warning">'.$pro_detail['discount'].'% </h5>
                            <img class="detail-img1" src="'.$pro_detail['resource_path'].'" alt="detail">
                        </div>
                    </div>
                    <div class="d-flex flex-row bd-highlight mb-3">
                        <div class=" bd-highlight"><img class="detail-img2" src="'.$pro_detail['resource_path'].'" alt="1"></div>
                        <div class=" bd-highlight"><img class="detail-img2" src="'.$pro_detail['resource_path'].'" alt="2"></div>
                        <div class=" bd-highlight"><img class="detail-img2" src="'.$pro_detail['resource_path'].'" alt="3"></div>
                    </div>
                    
                </div>
                    <!-- right-side -->
                <div class="col-sm-5 border-left ml-5">

                        <?php
                                
                        ?>
                        <div class="d-flex">
                            <div class="p-2 flex-grow-1 bd-highlight">
                                <h5>'.$pro_detail['name'].'</h5>
                            </div>
                            <div class="p-2 bd-highlight text-danger"><del>$'.$pro_detail['price'].'</del></div>
                            <div class="p-2 bd-highlight">
                                <h5>$'.$dis_count.'</h5>
                            </div>
                        </div>

                        <div class="d-flex flex-row bd-highlight mb-3">
                            <div class="p-2 bd-highlight d-block">'.$pro_detail['description'].'</div>
                        </div><br>

                        <div class="d-flex bd-highlight">
                            <div class="p-2 bd-highlight ">
                                <a href="#" class="btn btn-white border border-dark"><img class="cart-img"
                                        src="/Assignment_2/assets/icons/cart.png" alt="cart"> Cart</a>
                            </div>
                        </div><br>
                        ';
                    endforeach;

                    ?>
                    <?php   
                    $tag = 'select * from product_tag pt join tags t on pt.tag_id = t.id where pt.tag_id ='.$_GET['id'];
                    $t = query ($tag);    
                    foreach ($t as $tg):
                        echo '
                        <div class="d-flex bd-highlight">
                            <div class="p-2 col-6">
                                <a href="#" class="btn btn-secondary border border-dark">'.$tg['name'].'</a>
                            </div>
                            <div class="p-2 col-6">
                                <a href="#" class="btn btn-secondary border border-dark">Ony one </a>
                            </div>
                        </div>';
                    endforeach;
                    ?>
                </div>
                    <!-- Big-row -->
            </div>

                <!-- row -->
            </div><br>
            <hr>
            <!-- reviewer -->
            <?php include './review.php'; ?>
            <!-- wrap-row    -->
        </div>
        <!-- container        -->
    </div>

</body>

</html>
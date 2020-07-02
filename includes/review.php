<?php
  require_once '../database/connection.php';
    date_default_timezone_set('Asia/Phnom_Penh');
?>

<?php

       
        If (isset($_POST['submit'])) {

            $date = $_POST['date'];
            $comment = $_POST['comment'];
            $pro_id = $_POST['pro_id'];
        

            $sql = "INSERT INTO reviews (content,written_at, product_id) VALUE ('$comment','$date', '$pro_id')";
            $result =query($sql);
        }

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="/Assignment_2/assets/css/style.css">
    <link rel="stylesheet" href="/Assignment_2/assets/links/bootstrap.min.css">
    <title>Review</title>
</head>
<body>
<div class="container">

        <?php
            $product_id = $_GET["id"];
            $sqli = "Select * From reviews join products WHERE products.id = reviews.product_id HAVING product_id = {$product_id} ORDER BY written_at DESC ";

            $result = query($sqli);
    
            foreach ($result as $row):
    
                echo '
                <div class="media border border-dark">
                    <img class="m-3 profile question-mark" src="/Assignment_2/assets/icons/question.png" alt="">
                    <div class="media-body">
                        <h5 class="mt-0">Anonymous</h5>
                        '.$row['written_at'].'<br>
                        '.$row['content'].'<br>
                    </div>
                </div>
                <br>
                ';
            endforeach;


        ?>

    <?php
        echo '
            <h4>Comments</h4>
        <form action="" method="POST">

                <input type="hidden" name="date" value="'.date('Y-m-d H:i:s').'">
                <input type="hidden"  name="pro_id" value="'.$_GET['id'].'" >
                <textarea class="textbox" name="comment" id="comment" rows="5" placeholder="Write your comment here..."></textarea>
            
            
            <button class="m-1 btn bg-success " type="submit" name="submit"><img class="cart-img" src="/Assignment_2/assets/icons/send.webp" alt="" srcset=""> Send</button>
            <button class="m-1 btn bg-secondary " type="reset" ><img class="cart-img" src="/Assignment_2/assets/icons/discard.png" alt=""> Discard</button>
        </form>';


        
    ?>
</div>
</body>
</html>
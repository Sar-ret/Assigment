<?php
   $con = mysqli_connect('db4free.net','mysql123','SaRet12@','saretsql123456');
    //$con = mysqli_connect('localhost', 'root', '', 'awesome_shop');
    date_default_timezone_set('Asia/Phnom_Penh');
?>

<?php

       
        If (isset($_POST['submit'])) {
            
            $date = $_POST['date'];
            $comment = $_POST['comment'];
            $pro_id = $_POST['pro_id'];
        

            $sql = "INSERT INTO reviews (content,written_at, product_id) VALUE ('$comment','$date', '$pro_id')";
            $result = $con ->query($sql);
        }

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="../assets/css/style.css">
    <link rel="stylesheet" href="../assets/links/bootstrap.min.css">
    <title>Review</title>
</head>
<body>
    <div class="container">

        <?php
            $sql = "Select * From reviews join products where product_id = products.id order by written_at DESC";
            $result = $con->query($sql);
            $row = $result->fetch_assoc();
    
            while ($row = $result->fetch_assoc()) {
    
                echo '
                <div class="media border border-dark">
                <img class="m-3 profile question-mark" src="./assets/icons/question.png" alt="">
                <div class="media-body">
                    <h5 class="mt-0">Anonymous</h5>
                    '.$row['written_at'].'<br>
                     '.$row['content'].'<br>
                </div>
            </div>
                <br>
                ';
                
                
            }


        ?>

    <?php
        echo '
            <h4>Comments</h4>
        <form action="" method="POST">

                <input type="hidden" name="date" value="'.date('Y-m-d H:i:s').'">
                <input type="hidden"  name="pro_id" value="'.$_GET['id'].'" >
                <textarea class="textbox" name="comment" id="comment" rows="5" placeholder="Write your comment here..."></textarea>
            
            
            <button class="m-3 btn bg-success" type="submit" name="submit" value="Send"> Send</button>
            <button class="m-3 btn bg-secondary" type="reset" value="Discard"> Discard</button>
        </form>';


        
    ?>
    </div>
</body>
</html>
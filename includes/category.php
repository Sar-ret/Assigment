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
                                        <a class="nav-link" href="#"><img class="category-icon" src="/Assignment_2/assets/icons/'.$cate_icon['icon'].'" alt="laptop">'.$cate_icon['name'].'</a>
                                    </li>  
                             ';
                            }else {
                                echo '
                           
                                    <li class="nav-item mb-1 text_category" id="'.$cate_icon['name'].'" >
                                        <a class="nav-link" href="#"><img class="category-icon" src="/Assignment_2/assets/icons/'.$cate_icon['icon'].'" alt="laptop">'.$cate_icon['name'].'</a>
                                    </li>  
                             ';
                            }
                            $count++;
                        endforeach;
                    ?>
                </ul>
            </div>


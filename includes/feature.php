<?php
        $features = query ('select * FROM features order by rand() limit 1;');
        $feat = $features -> fetch_array(MYSQLI_NUM);
    ?>
        <div class=" jumbotron text-center bg-feature" style="background: url(<?php echo $feat[3]; ?>) ">
            <h1 class="text-success font-weight-bold" id="myDIV"><?php echo $feat[1];?></h1>
            <h3 class="text-info"><?php echo $feat[2]; ?> </h3>
            
                <input class="border-primary btn-search" type="text" id="search" placeholder="Search..." aria-label="Search"> 
       
        </div>
    
        


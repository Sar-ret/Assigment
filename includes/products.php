<?php
     $product = 'select * from products join assets on products.id = assets.product_id;';
     $items = query($product);
     $item_amount =0;
     
     foreach($items as $item):
        $dis_count = ((100 - $item['discount']) * $item['price']/100);
         echo '
         
                <div class="col-md-4 item_product">
                    <div class="card mt-1" style="width: 100%;">                                        
                            <img class="card-img-top sell-img" src="'.$item['resource_path'].'" alt="Card image cap">
                        <div class="card-body">
                            <h5 ><span class="rounded d-inline bg-warning float-right p-1" id="myDIV">'.$item['discount'].'%</span></h5>
                            <p class="card-text">'.$item['name'].'</p>
                            <p class="card-text">'.$item['description'].'</p>
                            <p><del class="text-danger">$'.$item['price'].'</del></p>
                            <h5 class="d-inline"> $ '.$dis_count.'</h5>
                            <a href="#" class="btn btn-white float-right border border-dark"><img class="cart-img" src="./assets/icons/cart.png" alt="cart"> Cart</a>                                           
                
                        </div>
                    </div>
                </div>            
         ';
         $item_amount++;
     endforeach;
     if($item_amount > 1){
         // Show more button
         echo '
        <div class="row justify-content-md-center" style="width: 100%;">
            <div class="col col-lg-2"> </div>
            <div class="col-md-auto mt-3" ><button type="button" class="btn btn-success" id="loads">Load More</button></div>
            <div class="col col-lg-2"></div>
        </div>
         ';
        }
?>

<?php
include './database/connection.php';
  if(isset($_POST["keyword"])){
      $keyword = $_POST['keyword'];
      $category_id = $_POST['category_id'];

      $query = "select * from products join assets on products.id = assets.product_id where products.category_id = '{$category_id}' AND name LIKE '%{$keyword}%';";
 
      $items_category = query($query);
      $output ='';
  
      if(mysqli_num_rows($items_category)>0){
          
          $item_amount = 6;
          while($row = mysqli_fetch_array($items_category)){
              $dis_count = ((100 - $row['discount']) * $row['price']/100);
                  $output .= '

                <div class="col-md-4 ">
                    <div class="card mt-1" style="width: 100%;">                                        
                          <img class="card-img-top sell-img" src="'.$row['resource_path'].'" alt="Card image cap">
                        <div class="card-body">
                            <h5 ><span class="rounded d-inline bg-warning float-right p-1" id="myDIV">'.$row['discount'].'%</span></h5>
                            <p class="card-text">'.$row['name'].'</p>
                            <p class="card-text">'.$row['description'].'</p>
                            <p><del class="text-danger">$'.$row['price'].'</del></p>
                            <h5 class="d-inline"> $ '.$dis_count.'</h5>                             
                            <a href="#" class="btn btn-white float-right border border-dark"><img class="cart-img" src="./assets/icons/cart.png" alt="cart"> Cart</a>                                            
                        </div>
                    </div>        
                </div> 
                  ';
                  $item_amount++;

              }
              echo $output;
              if($item_amount < 6 ){
                  // Show more button
                  echo '
                    <div class="row justify-content-md-center" style="width: 100%;">
                          <div class="col col-lg-2"> </div>
                          <div class="col-md-auto mt-3" > 
                              <button type="button" class="btn btn-success" id="load">Load More</button>
                          </div>
                          <div class="col col-lg-2"></div>
                    </div>
                  ';
              }
          }else{
              echo '
            <div class="row justify-content-md-center">
                <div class="col col-lg-2" > </div>
                <div class="col-md-auto mt-3" id="myDIV"><h1><center>Can not Find the product.</center></h1></div>
                <div class="col col-lg-2"></div>
            </div>
              ';
          }
    }

//   $cateId = 0;
//   $product = 'select * from products join assets on assets.product_id = products.id';
//   $items_category = query($product);
//       foreach ($items_category as $row):
//           $dis_count = ((100 - $row['discount']) * $row['price']/100);
//           echo '
//           <div class="col-md-4 item_product">
//               <div class="card mt-1" style="width: 100%;">                                        
//                       <img class="card-img-top sell-img" src="'.$row['resource_path'].'" alt="Card image cap">
//                   <div class="card-body">
//                       <h5 ><span class="rounded d-inline bg-warning float-right p-1">'.$row['discount'].'%</span></h5>
//                           <p class="card-text">'.$row['name'].'</p>
//                           <p class="card-text">'.$row['description'].'</p>
//                           <p><del class="text-danger">$'.$row['price'].'</del></p>
//                           <h5 class="d-inline"> $ '.$dis_count.'</h5>
                          
//                           <a href="#" class="btn btn-white float-right border border-dark"><img class="cart-img" src="./assets/icons/cart.png" alt="cart"> Cart</a>                                       
//                   </div> 
//               </div>
//           </div>                               
//           ';     
//           $cateId++;
//       endforeach;                     
//               if($cateId > 1){
//                               // Show more button
//                   echo '
//                       <div class="row justify-content-md-center" style="width: 100%;">
//                           <div class="col col-lg-2"> </div>
//                           <div class="col-md-auto mt-3" > 
//                               <button type="button" class="btn btn-success" id="load">Load More</button>
//                           </div>
//                           <div class="col col-lg-2"></div>
//                       </div>
//                       ';
//               }else {
//                   echo '
//                   <div class="row justify-content-md-center" style="width: 100%;">
//                       <div class="col col-lg-2"> </div>
//                       <div class="col-md-auto mt-3" > Can not find  </div>
//                       <div class="col col-lg-2"></div>
//                   </div>
//                   ';
      
//               }
           
      
                      
  
?>


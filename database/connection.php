<?php
    // function execute select statement
  function query($sql){
    //  $con = mysqli_connect('db4free.net','mysql123','SaRet12@','saretsql123456');
    $con = mysqli_connect('localhost', 'root', '', 'awesome_shop');
      $result = mysqli_query($con, $sql);
      mysqli_close($con);
      return $result;
      
  }

?>
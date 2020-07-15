<?php
    session_start();                       
    session_destroy();
    header("Location: /Assignment_2/index.php");
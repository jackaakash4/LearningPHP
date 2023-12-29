<?php 
    session_start();
   
    
    session_destroy();

    header('Location: /PHPCrash/13_session.php');
?>
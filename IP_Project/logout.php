<?php
    session_start();
    if(isset($_SESSION['login']) and $_SESSION['login']=="true"){
        header("Location:index.php");
        session_destroy();
        exit();
    }    
?>
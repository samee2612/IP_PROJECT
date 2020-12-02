<?php


session_start();
require_once 'connection.php';

    
   $create_table_query = "create table if not exists users(firstname varchar(20), 
                                                            email varchar(20),
                                                            address varchar(50),
                                                            city varchar(20),
                                                            state varchar(20),
                                                            zip int(7),
                                                            cardname varchar(25));";

    //Connecting with database
    

    //Creating the table in database 
    $result = mysqli_query($db,$create_table_query) or die ("error querying database");

    if(isset($_POST['payButton'])){
      
      $firstname = $_POST['firstname'];
      $email = $_POST['email'];
      $address = $_POST['address'];
      $city = $_POST['city'];
      $state = $_POST['state'];
      $zip = $_POST['zip'];
      $cardname = $_POST['cardname'];

      $pay_insert = "insert into payment(firstname,email,address,city,state,zip,cardname) VALUES ('$firstname','$email','$address','$city','$state','$zip','$cardname');";
      $result = mysqli_query($db,$pay_insert)or die('error querying database for insert');
      header("Location:successful.html");
      }

    
    mysqli_close($db);
    ?>
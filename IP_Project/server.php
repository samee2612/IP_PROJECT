<?php
session_start();
    //NOTE: DATABASE 'ecommerce' is already created from xampp
    //Create table query
   $create_table_query = "create table if not exists users(id int(6) auto_increment primary key,
                                                            fname varchar(20) not null, 
                                                            lname varchar(20) not null,
                                                            email varchar(30) not null unique,
                                                            password varchar(20) not null);";

    //Connecting with database
    $jdbc = mysqli_connect("localhost:3306","root","","ecommerce") or die ('Error connecting with database');

    //Creating the table in database 'ecommerce'
    $result = mysqli_query($jdbc,$create_table_query) or die ("error querying database");

    //Checking which button called server.php, login or register
    if(isset($_POST['registerButton'])){
        echo 'Register';
        $fname = $_POST['fname'];
        $lname = $_POST['lname'];
        $email = $_POST['email'];
        $paswd = $_POST['password'];
        $confirm_paswd = $_POST['cpassword'];

        echo $fname.' '.$lname.' '.$email.' '.$paswd.''.$confirm_paswd;

        if($paswd!=$confirm_paswd){
            $_SESSION['register_error']='Passwords do not match!';
            header("Location:register.php");
            exit();
        }else if(strlen($paswd)<8){
            $_SESSION['register_error']='Password should be minimum 8 characters long!';
            header("Location:register.php");
            exit();
        }
        if(check_If_User_Exists($email,$paswd,"register",$jdbc)){
            $_SESSION['register_error']='Email-ID already registered!';
            header("Location:register.php");
            exit();
        }else{
            $register_user_query = "insert into users(fname,lname,email,password) values('$fname','$lname','$email','$paswd');";
            $result = mysqli_query($jdbc,$register_user_query)or die('error querying database for insert');
            header("Location:login.php");
        }
    }
    else if (isset($_POST['loginButton'])){
        echo 'Login';
        $email = $_POST['email'];
        $paswd = $_POST['password'];
        

        if(check_If_User_Exists($email,$paswd,"login",$jdbc)){
            $_SESSION['login']='true';
            header("Location:index.php");
        }else{
            $_SESSION['login_error']='Invalid email-id or password!';
            header("Location:login.php");
            exit();
        }
    }
    else{
        echo 'Not sure which button was clicked';
    }

    //Cheking if user exists
    function check_If_User_Exists($emailID,$passwd,$type,$jdbc){
        $count=0;
        $verify_user_query = "select * from users where email='$emailID'";
    
        $result = mysqli_query($jdbc,$verify_user_query) or die ('error querying database');

        $row = mysqli_fetch_array($result);

        $count = mysqli_num_rows($result);

        if($type=="register"){
            //check if the email already exists
            if($count!=0){
                return 1;//email already exists
            }
            else {return 0;}
        }
        else if($type=="login"){
            //check if the email and password match
            if($count==1){
                if($row['email']==$emailID and $row['password']==$passwd){
                    $_SESSION['user_name']=$row['fname']." ".$row['lname'];
                    return 1; //user credentials verified
                }
                else{return 0;}//invalid user credentials
            }else{echo "..............";}
        }
    }
    mysqli_close($jdbc);
?>
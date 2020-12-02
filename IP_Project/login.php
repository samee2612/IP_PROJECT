<html>
    <head>
        <link href="loginStyle.css" rel="stylesheet" type="text/css"/>
        <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css" rel="stylesheet" type="text/css"/>
        <link href="https://stackpath.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.bundle.min.js" type="javascript"/>
        <link href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" rel="stylesheet" type="text/css"/>
        <link href="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.2.1/jquery.min.js"/>
    </head>
    <body>
<div class="container bg-white pb-5">
    <div class="row d-flex justify-content-start align-items-center mt-sm-5">
        <div class="col-lg-5 col-10">
            <div class="pb-5"> <img src="https://img.freepik.com/free-vector/authentication-concept-illustration_114360-2168.jpg?size=338&ext=jpg&ga=GA1.2.777073396.1599399655" alt=""> </div>
        </div>
        <div class="col-lg-4 offset-lg-2 col-md-6 offset-md-3">
            <div class="pt-4">
                <h6><span class="fa fa-superpowers text-primary px-md-2"></span>COMPANY LOGO</h6>
            </div>
            <div class="mt-3 mt-md-5">
                <h5>Log in to your account</h5>
                <div><p id="alert"><?php session_start(); if(isset($_SESSION['login_error'])){echo $_SESSION['login_error']; session_destroy();}?></p></div>
                <form class="pt-4" method="POST" action="server.php">
                    <div class="d-flex flex-column pb-3"> <label for="email">Email Address</label> <input required type="email" name="email" id="email" onblur="validateemail();" class="border-bottom border-primary"><label id="validate"></label></div>
                    <div class="d-flex flex-column pb-3"> <label for="password">Password</label> <input required type="password" name="password" id="password" class="border-bottom border-primary"> </div>
                    <div class="d-flex jusity-content-end pb-4">
                        <div class="ml-auto"> <a href="#" class="text-danger text-decoration-none">Forgot password?</a> </div>
                    </div>
                    <input type="submit" name="loginButton" value="Log in" class="btn btn-primary btn-block mb-3"/>
                    <div class="register mt-5">
                        <p>Don't have an account? <a href="register.php">Create an account</a></p>
                    </div>
                </form>
            </div>
        </div>
    </div>
</div>

<script>

    function validateemail() {
    
    var request;
    
    try {
    
    request= new XMLHttpRequest();
    
    }
    
    catch (tryMicrosoft) {
    
    try {
    
    request= new ActiveXObject("Msxml2.XMLHTTP");
    }
    
    catch (otherMicrosoft) 
    {
    try {
    request= new ActiveXObject("Microsoft.XMLHTTP");
    }
    
    catch (failed) {
    request= null;
    }
    }
    }
    
    
    
    var url= "emailvalidation.php";
    var emailaddress= document.getElementById("email").value;
    var vars= "email="+emailaddress;
    request.open("POST", url, true);
    
    request.setRequestHeader("Content-type", "application/x-www-form-urlencoded");
    
    request.onreadystatechange= function() {
    if (request.readyState == 4 && request.status == 200) {
        var return_data=  request.responseText;
        document.getElementById("validate").innerHTML= return_data;
    }
    }
    
    request.send(vars);
    }
    </script>
    
</body>
</html>
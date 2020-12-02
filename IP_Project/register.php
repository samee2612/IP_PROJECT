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
                <h5>Register with valid personal details</h5>
                <form class="pt-4" method="POST" action="server.php">
                    <div class="d-flex flex-column pb-3"> <label for="fname">First name<span>*</span></label> <input required type="text" name="fname" id="fname" class="border-bottom border-primary"> </div>
                    <div class="d-flex flex-column pb-3"> <label for="lname">Last name<span>*</span></label> <input required type="text" name="lname" id="lname" class="border-bottom border-primary"> </div>
                    <div class="d-flex flex-column pb-3"> <label for="email">Email Address<span>*</span></label> <input required type="email" name="email" id="email" class="border-bottom border-primary"> </div>
                    <div class="d-flex flex-column pb-3"> <label for="password">Password<span>*</span></label> <input required type="password" name="password" id="password" class="border-bottom border-primary"> </div>
                    <div class="d-flex flex-column pb-3"> <label for="cpassword">Confirm Password<span>*</span></label> <input required type="text" name="cpassword" id="cpassword" class="border-bottom border-primary"> </div>
                    <div class="d-flex jusity-content-end pb-4"></div> 
                    <input type="submit" value="Register" name="registerButton" class="btn btn-primary btn-block mb-3"/> 
                    <div class="register mt-5">
                        <p>Already have an account? <a href="login.php">Login instead!</a></p>
                    </div>
                </form>
            </div>
        </div>
    </div>
</div>
</body>  
</html>
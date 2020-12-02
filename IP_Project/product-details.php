<?php
$conn=new mysqli('localhost','root','','ecommerce');

?>
<html>
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width,initial-scale=1.0">
    <title>All products - Tribal</title>
    <link rel="stylesheet" href="style.css">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">
</head>

<body>

    <div class="container">
        <div class="navbar">
            <div class="logo">
                <img src="images/logo1.png" width="125px">
            </div>
            <nav>
                <ul id="items">
                    <li><a href="index.php">Home</a></li>
                    <li><a href="">About</a></li>
                    <li><a href="products.php">Category</a></li>
                    <li><a href="">Contact</a></li>
                    <li><a href="login.php">Account</a></li>
                </ul>
    
            </nav>
        <img src="images/cart.png" width="30px" height="30px">
        <img src="images/menu.png" class="menu-icon" width="30px" height="30px" onclick="toggle()">
    </div>

</div>

</body>  

<!----------------single product details------------------>
<div class="small-container single-product">
    <div class="row">
        <div class="col-2">
            <img src="images/pendant1.jpg" width="100%" id="ProductImg">
            <div class="small-img-row">
                <div class="small-img-col">
                    <img src="images/pendant2.jpg" width="100%" class="small-img">
                </div>
                <div class="small-img-col">
                    <img src="images/pendant3.jpg" width="100%" class="small-img">
                </div>
                <div class="small-img-col">
                    <img src="images/pendant4.jpg" width="100%" class="small-img">
                </div>
                <div class="small-img-col">
                    <img src="images/pendant5.jpg" width="100%" class="small-img">
                </div>
            </div>
        </div>

        <div class="col-2">
            <p>Home / Jewellery</p>
            <h1> Pack of 30 pendants</h1>
            <h4>500/- </h4>
            <input type = "number" value="1">
            <a href="cart.php" class="btn">Add to Cart</a>
            <h3> Product Details<i class="fa fa-indent" ></i></h3>
            <br>
            <p>A beautiful pack of 30 pendants with variety of figures. These are handcrafted pendants and are very pretty for any occasion.</p>
        </div>
    </div>
</div>

<!-----------------title--------------->
<div class="small-container">
    <div class="row row-2">
        <h2>Related Products</h2>
        <p>View More</p>
    </div>
</div>
<div class="small-container">

    
    <div class="row">
        <div class="col-4"><img src="images\necklace1.jpg" alt="">
        <h4>Tribal metal gypsy Necklace</h4>
        <div class="rating">
            <i class="fa fa-star" aria-hidden="true"></i>
            <i class="fa fa-star" aria-hidden="true"></i>
            <i class="fa fa-star" aria-hidden="true"></i>
            <i class="fa fa-star" aria-hidden="true"></i>
            <i class="fa fa-star-o" aria-hidden="true"></i>
        </div>
        <p>$30.00</p>
        </div>
        <div class="col-4"><img src="images\necklace2.jpg" alt="">
            <h4>Tribal Odisha Dokra</h4>
            <div class="rating">
                <i class="fa fa-star" aria-hidden="true"></i>
                <i class="fa fa-star" aria-hidden="true"></i>
                <i class="fa fa-star" aria-hidden="true"></i>
                <i class="fa fa-star" aria-hidden="true"></i>
                <i class="fa fa-star-half-o" aria-hidden="true"></i>
            </div>
            <p>$50.00</p>
        </div>
        <div class="col-4"><img src="images\necklace3.jpg" alt="">
            <h4>Layered necklace</h4>
            <div class="rating">
                <i class="fa fa-star" aria-hidden="true"></i>
                <i class="fa fa-star" aria-hidden="true"></i>
                <i class="fa fa-star" aria-hidden="true"></i>
                <i class="fa fa-star" aria-hidden="true"></i>
                <i class="fa fa-star" aria-hidden="true"></i>
            </div>
            <p>$100.00</p>
        </div>
        <div class="col-4"><img src="images\necklace4.jpg" alt="">
            <h4>Afghan tribal necklace</h4>
            <div class="rating">
                <i class="fa fa-star" aria-hidden="true"></i>
                <i class="fa fa-star" aria-hidden="true"></i>
                <i class="fa fa-star" aria-hidden="true"></i>
                <i class="fa fa-star" aria-hidden="true"></i>
                <i class="fa fa-star-half-o" aria-hidden="true"></i>
            </div>
            <p>$50.00</p>
        </div>
        
    </div>
    
</div>




<!-------------------------------------footer-------------------------------------->
<div class="footer">
    <div class="container">
        <div class="row">
            <div class="footer-col-1">
                <h3>Download Our App</h3>
                <p>Download our app for android as well as ios</p>
                <div class="app-logo">
                    <img src="images/play.png" alt="">
                    <img src="images/ios.png" alt="">
                </div>
            </div>
            <div class="footer-col-2">
                <h3><img src="images/logo1.png" alt=""></h3>
                <p>Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur.</p>
            </div>
            <div class="footer-col-3">
                <h3>Ut enim ad</h3>
                <ul>
                    <li>Blogs</li>
                    <li>Join us</li>
                    <li>Discount coupons</li>
                    <li>Refund policy</li>
                </ul>
            </div>
            <div class="footer-col-4">
                <h3>You can follow us on</h3>
                <ul>
                    <li>Twitter</li>
                    <li>Instagram</li>
                    <li>Facebook</li>
                    <li>youtube</li>
                </ul>
            </div>
        </div>
        <hr>
            <p class="copyright">Copyright 2020 - Mini Project</p>
    </div>
</div>
<!------------------js for menu toggling---------->
<script>
    var items=document.getElementById("items");
    items.style.maxHeight="0px";

    function toggle(){
        if(items.style.maxHeight=="0px"){
            items.style.maxHeight="200px";
        }
        else{
            items.style.maxHeight="0px";
        }
    }
</script>
<!------------------js for product gallery---------->
<script>
    var ProductImg = document.getElementById("ProductImg");
    var SmallImg = document.getElementsByClassName("small-img");
    SmallImg[0].onclick = function(){
        ProductImg.src = SmallImg[0].src;
    }
    SmallImg[1].onclick = function(){
        ProductImg.src = SmallImg[1].src;
    }
    SmallImg[2].onclick = function(){
        ProductImg.src = SmallImg[2].src;
    }
    SmallImg[3].onclick = function(){
        ProductImg.src = SmallImg[3].src;
    }
</script>
</body>
</html>
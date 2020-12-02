<?php

require_once 'connection.php';
$id=$_GET['id'];
$query="SELECT * FROM products where id='".$id."'";
$result=$db->query($query);
    if($result->num_rows>0)
    {
        $row=$result->fetch_assoc();  
        $name=$row['name'];
        $code=$row['code'];
        $qty=$row['qty'];
        $price=$row['price'];
        $image=$row['image'];
    }
    ?>


<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="style1.css">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.16.0/umd/popper.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.min.js"></script>
    <title>Shopping Cart</title>

</head>
<body>
<div class="container py-5">
    <div class="d-flex justify-content-between mb-2">
        <h3>Cart  Items</h3>
        <a class="btn btn-danger" href="index.php?action=empty">Empty Cart</a>
    </div>
    <div class="row">
        <table class="table">
            <tbody>
                <tr>
                    <th class="text-left">Name</th>
                    <th class="text-left">Code</th>
                    <th class="text-left">Quantity</th>
                    <th class="text-left">Item Price</th>
                    <th class="text-left">Total</th>
                </tr>
                <tr>
                    <td class="text-left" id="name">
                    <img src="<?php echo $image; ?>" alt="" class="img-fluid" width="100">
                    <?php echo $name ?></td>
                    <td class="text-left" id="code"><?php echo $code ?></td>
                    <td class="text-left"><input type="number" value="<?php echo $qty ?>" min="1" id="qty"></td>
                    <td class="text-left"><input type="text" id="price" value="<?php echo $price ?>" disabled></td>
                    <td class="text-left" id="total"></td>
                    
                    </td>
                </tr>
            </tbody>
        </table>
        <h4 class="text-left">Total: ₹<span id="demo"></span></h4>

           
    </div>
</div>
<a href="checkout.html" style="color:white;text-decoration:none">
<input type="button"  value="Click to Checkout" style="background:green;color:white"></a>
<script>
    $(document).ready(function(){
        var price=$('#price').val();
        var qty=$('#qty').val();
        var add=qty*price;
        $('#total').html(add);
        $('#demo').html(add);

    $('#qty').change(function(){
        var qty=$(this).val();
        var add=qty*price;
        $('#total').html(add);
        $('#demo').html(add);
    });
    });
</script>

    
</body>
</html>
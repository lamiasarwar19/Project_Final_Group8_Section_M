<?php
    session_start();
    if(isset($_SESSION['flag'])){
    require_once('../model/userModel.php');
?>
<!DOCTYPE html>
<html>
<head>
    
    <title>Wishlist</title>
    <link rel="stylesheet" href="../css/style.css">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">
    <link rel="stylesheet" href="../css/back.css">
</head>
<body>

    <div class="menu-bar">
        <ul>
            <li ><img src="../photos/MabLogo.png" height="70px"></li>
            <!-- <li class="active"><a href="viewProCus.php"><i class="fa fa-user"></i>Profile</a></li> -->
            <li class="active"><a href="homeeCus.php"><i class="fa fa-home"></i>Home</a></li>
            <li><a href="cartCus.php"><i class="fa fa-shopping-cart"></i>MyCart</a></li>
            <li><a href="contact.php"><i class="fa fa-compress"></i>Contact</a></li>
            <li><a href="../controller/logout.php"><i class="fa fa-sign-out"></i>Logout</a></li>
        </ul>
    </div>
    <table border="1" width="100%" align="center" height="400px">
        <td align="center">
            
            <form method="post" action="../controller/logcheckCus.php">               
                <fieldset style="width:320px">
                    <legend height><b>My WishList</b></legend>
                    <table height="300px">
                    <tr>
                    <td><u><b>Product</b></u></td>
                    <td><u><b>Price</b></u></td>
                    </tr>
                    <?php
                        $conn=getConnection(); 
                        $sql = "select p.productName as productName,p.sellingPrice as sellingPrice FROM wish as c, products as p where c.productId = p.pid && c.username = '{$_SESSION['username']}'";
                        $result = mysqli_query($conn, $sql);
                        $num=mysqli_num_rows($result);
                        if($num > 0)
                        {
                           
                            while($product=mysqli_fetch_array($result))
                                {
                                   
                                ?>

                                <tr>
                                    <td><b><?php echo $product['productName']; ?></b></td>
                                    <td><b><?php echo $product['sellingPrice'];?>BDT</b></td>
                                </tr>

                                <?php
                        }
                        
                    }   
                        ?>
                    
                    </table>
                </fieldset>
            </form>
        </td>
        </table>
  
    <div class="menu-bar">
        <ul>
            <li class="active">Copyright2021@MAB</a></li>
        </ul>
    </div>
    
</body>
</html>
<?php
    }else{
        header('location: ../view/login.php');
    }
?>
<?php
    session_start();
    if(isset($_SESSION['flag'])){
        require_once('../model/userModel.php');
  //  $user = $_SESSION['loggedInUser'];
?>
<!DOCTYPE html>
<html>
<head>

  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.16.0/umd/popper.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
  <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-eOJMYsd53ii+scO/bJGFsiCZc+5NDVN2yr8+0RDqr0Ql0h+rP48ckxlpbzKgwra6" crossorigin="anonymous">
  <link rel="https://fonts.googleapis.com/css?family=Abirl+fatface|Dancing+Script" href="stylesheet ">
  <link rel="stylesheet" href="../css/style.css">
   <link rel="stylesheet" href="../css/back.css">
</head>


<body class="container">

    <div class="menu-bar">
        <ul>
            <li ><img src="../photos/MabLogo.png" height="70px" align="left"></li>
            <li class="active"><a href="#"><i class="fa fa-user"></i>Profile</a>
                <div class="sub-menu-1">
                    <ul>
                        <li><a href="editProCus.php">Edit Profile<i class="fa fa-pencil-square-o" aria-hidden="true"></i></a></l>
                        <li><a href="changepass.php">Change Password<i class="fa fa-key" aria-hidden="true"></i></a></li>
                        <li><a href="profilePic.php">Change Profile Picture<i class="fa fa-picture-o" aria-hidden="true"></i></a></li>
                    </ul>
                </div></li>
            <li><a href="SearchCus.php"><i class="fa fa-search" aria-hidden="true"></i>Search </a></li>
            <li><a href="cartCus.php"><i class="fa fa-shopping-cart"></i>MyCart</a></li>
            <li><a href="contact.php"><i class="fa fa-compress"></i>Contact</a></li>
            <li><a href="../controller/logout.php"><i class="fa fa-sign-out"></i>Logout</a></li>
        </ul>
    </div>

    <table width="100%" border="1">   
        <tr height='100px' align="left">
            <h3> Welcome <?php echo $_SESSION['username'] ?></h3>

    </table>
    <div class="row">
        
        <?php
        $conn=getConnection(); 
        $sql = "select * from products order by pid ASC";
        $result = mysqli_query($conn, $sql);
        $num=mysqli_num_rows($result);
        if($num > 0)
        {
            while($product=mysqli_fetch_array($result))
                {
                ?>

                <div class="col-lg-3 col-md-3 col-sm-12" >

                <div class="card">
                <h6 class="card-title bg-info text-white"><?php echo 
                $product['productName']; ?></h6>
                <div class="card-body">
                 <img src="<?php echo 
                $product['photo1']; ?>" alt="shirt" class="img-fluid mb-2">
                <h6> &#2547; <?php echo $product['sellingPrice'];  ?><span>
                (<?php echo $product['discount']; ?>% off) </span>  </h6>

                <h6 class="badge badge-success">4.5<i class="fa fa-star" aria-hidden="true"></i></h6>
                </div>

                <div class="btn-group d-flex">
                <button onclick="addToCart('<?php echo $_SESSION['username'] ?>','<?php echo $product['pid'] ?>')" class="btn btn-success flex-fill">Add to cart  </button> 
                <button onclick="addToWish('<?php echo $_SESSION['username'] ?>','<?php echo $product['pid'] ?>')"class="btn btn-warning flex-fill "> Add to wishlist </button><br>

                </div>

                </div>

                </div>

                <?php
        }
    }   
        ?>       
</div>
    
    <div class="menu-bar">
        <ul>
            <li class="active">Copyright2021@MAB</a></li>
        </ul>
    </div>


    
</body>
</html>
<script src="../js/homeeCus.js"></script>
<?php
    }else{
        header('location: ../view/login.php ');
    }
?>
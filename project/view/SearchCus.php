<?php
	session_start();
	if(isset($_SESSION['flag'])){
        require_once('../model/userModel.php');
       // $user=($_SESSION["username"]);
?>
<!DOCTYPE html>
<html>
<head>
    <title>Login</title>
    <link rel="stylesheet" href="../css/style.css">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">
    <script type="text/javascript" src="Search.js"></script>
    <link rel="stylesheet" href="../css/back.css">
</head>
<body>
    <div class="menu-bar">
        <ul>
            <li ><img src="../photos/MabLogo.png" height="70px"></li>
            <li class="active"><a href="homeeCus.php"><i class="fa fa-home"></i>Home</a></li>
            <li><a href="viewProCus.php"><i class="fa fa-user"></i>Profile</a></li>
            <li><a href="contact.php"><i class="fa fa-compress"></i>Contact</a></li>
            <li><a href="../controller/logout.php"><i class="fa fa-sign-out"></i>Logout</a></li>
        </ul>
    </div>

    <div align="center">
    <h1 id='myid'>Search Product</h1>
    <form>
		<input type="text" name="name" id="name" value="" placeholder="Product Name" onkeyup="ajax()" />
		<input type="button" name="" value="click" onclick="">
	</form>
    <div id='result'></div>
    </div>
   
  
     <div class="menu-bar">
        <ul>
            <li class="active">Copyright2021@MAB</a></li>
        </ul>
    </div>

</body>
</html>
<?php
	}else{
		header('location: ../view/login.php ');
	}
?>
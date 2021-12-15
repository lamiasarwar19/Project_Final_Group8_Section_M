<?php
    session_start();
    if(isset($_SESSION['flag'])){
        require_once('../model/userModel.php');
  //  $user = $_SESSION['loggedInUser'];
?>
<html>
<head>
	<title>Edit Profile</title>
    <link rel="stylesheet" href="../css/style.css">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">
    <link rel="stylesheet" href="../css/back.css">
</head>
<body class="container">

    <div class="menu-bar">
	<table border="1" width="100%" align="center">
		<tr>
			<td colspan="3" height="80px" align="right">
				<img src="../photos/MabLogo.png" width="100px" height="50" align="left">

			    Logged in as <?php echo $_SESSION['username'] ?>|
                <a href="homeeCus.php">Back</a>|
				<a href="logout.php">Logout</a>
								
               </td>
		    </tr>

    </table>  
    </div>      
           
         </fieldset>
        </td>  
          </tr>  
         
       </form> 
       </table> 
        <table border="1" width="100%" align="center">
        <tr align="left" height="300px">
            
            <td align="center" >
                <form action="#" method="POST">
                <fieldset>
                    <legend>CHANGE PASSWORD</legend>
                    <table>
                         <tr>
                            <td>Current Password</td>           
                            <td>:<input type="password" name="password" value=""></td>
                         </tr>
                          <tr>
                            <td>New Password</td>
                           <td>:<input type="password" name="Npassword" value=""></td>
                         </tr>

                         <tr>
                            <td>Retype New Password</td>
                           <td>:<input type="password" name="Rnpassword" value=""></td>
                         </tr>



        
                        <tr><td><input type="submit" name="submit" value="Submit">
                        </td></tr>
      
                    </table>
                </fieldset>
                </form>
            </td>
        </tr>
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
        header('location: ../view/login.php ');
    }
?>
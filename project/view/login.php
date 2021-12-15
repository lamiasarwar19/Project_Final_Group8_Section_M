<?php
    session_start();
    if(isset($_SESSION['flag'])){
        require_once('../model/userModel.php');
    }
  //  $user = $_SESSION['loggedInUser'];
?>
<!DOCTYPE html>
<html>
<head>
   
    <title>Login</title>
    <link rel="stylesheet" href="../css/style.css">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">
    <link rel="stylesheet" href="../css/back.css">
</head>
<body>
   

    <div class="menu-bar">
        <ul>
            <li ><img src="../photos/MabLogo.png" height="70px"></li>
            <li class="active"><a href="aboutUs.php"><i class="fa fa-info-circle"></i>About Us</a></li>
            <li><a href="signupCus.php"><i class="fa fa-user-plus"></i>Signup</a></li>
        </ul>
    </div>
    <table border="1" width="100%" align="center" height="400px">
        <td align="center">
            
            <form method="post" action="../controller/logcheckCus.php">               
                <fieldset style="width:320px">
                    <legend height>LOGIN</legend>
                    <table height="200px">
                        <tr>
                            <td>Username</td>
                            <td><input type="text" name="username"  value="<?php if(isset($_COOKIE['username'])) echo $_COOKIE['username'];  ?>"></td>
                        </tr>
                        <tr>
                            <td>Password</td>
                            <td><input type="password" name="password"  value="<?php if(isset($_COOKIE['password'])) echo $_COOKIE['password'];  ?>"></td>
                        </tr>
                        <tr>
                            <td>Remember Me</td>
                            <td><input type="checkbox" name="remember" <?php if(isset($_COOKIE['username'])) {echo "checked";}  ?>></td>
                        </tr>                      
                        <tr>
                            <td>
                                <input type="submit" name="submit" value="Login"> 
                                <a href="forgotpassword.html">Forgot Password?</a>
                            </td>
                        </tr>
                    </table>
                </fieldset>
            </form>
        </td>
        </table>
    <!-- <table border="1" width="100%" height="50px">
        <td colspan="3"><center>Copyright2021@MAB</center></td> 
    </table>  -->
    <div class="menu-bar">
        <ul>
            <li class="active">Copyright2021@MAB</a></li>
        </ul>
    </div>
    
    
</body>
</html>
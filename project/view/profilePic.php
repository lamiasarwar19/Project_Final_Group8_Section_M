<?php 
session_start();
if(isset($_SESSION['flag'])){
    $user = $_SESSION['loggedInUser'];

?>
<!DOCTYPE html>
<html>
<head>
    
    <title>PROFILE PICTURE</title>
</head>
<body>

    <table border="1" width="100%" align="center">
        <tr>
            <td colspan="3" height="80px" align="right">
            <img src="../photos/MabLogo.png" height="50px" align="left">
            <h3>
                Logged in as <?php echo $user['username'] ?>| 
                <a href="logout.php" >Logout</a> |
                </h3>
            </td>           
                                 
        </tr>


    <table border="1" width="100%" align="center">
        <tr align="left" height="300px">
            <td align="center" >
                <form action="#" method="POST">
                <fieldset>
                    <legend>PROFILE PICTURE</legend>
                    <table>
                        <tr>
                        <img src="user.png" width="100" height="100">

                        </tr>
                        <td>
                            <input type="file" name="file">
                        </td>
                    
                        <tr>
                            <td> <input type="submit" name="upload" value="Submit"> </td>
                        </tr>  
                    </table>
                </fieldset>
                </form>
            </td>
        </tr>
    </table>

    <table border="1" width="100%" height="50px">
        <td colspan="3"><center>Copyright@2017</center></td> 
    </table>    
</body>
</html>
<?php
    }else{
        header('location: login.php');
    }
?>
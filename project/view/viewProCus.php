<?php
    session_start();
   // require_once('../model/userModel.php');
    if(isset($_SESSION['flag'])){
    require_once('../model/userModel.php');
    }else{
        header('location: ../view/login.php ');
    }
    
?>
<!DOCTYPE html>
<html>
<head> 
   
    <title>View</title>
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
            <li><a href="editProCus.php"><i class="fa fa-pencil-square"></i>Edit Profile</a></li>
            <li><a href="orderCus.php"><i class="fa fa-history"></i>Oredr History</a></li>
            <li><a href="contact.php"><i class="fa fa-compress"></i>Contact</a></li>
            <li><a href="../controller/logout.php"><i class="fa fa-sign-out"></i>Logout</a></li>
        </ul>
    </div>
    
 
    <table border="1" width="100%" align="center" height="400px">
    
        <td align="center">  
        <form method="post" action="logcheckCus.php">               
                <fieldset style="width:320px">
                    <legend height>Profile</legend>
        
                       <table height="300px">
                       <?php 
                                $users = getUserInformation($_SESSION["username"]);
                                foreach($users as $user){
                                    echo "<tr>
                                    <td>Name:{$user["name"]}</td>
                                </tr>
                                <tr>
                                    <td>Email :  {$user["email"]} </td>
                                </tr>
                                <tr>
                                    <td>Gender :  {$user['gender']} </td>
                                </tr>
                                <tr>
                                    <td>DOB :   {$user['dob']} </td>
                                </tr>"; 
                                }
                                ?>
                       
                    </table>
                    </fieldset>
            </form>
        </td>
        </table>
                
    </table>
    
    
    <div class="menu-bar">
        <ul>
            <li class="active">Copyright2021@MAB</a></li>
        </ul>
    </div>
    
</body>
</html>
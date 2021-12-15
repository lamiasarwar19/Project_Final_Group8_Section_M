<?php
  
  session_start();
  require_once('../model/userModel.php');
  
  if(!empty($_POST["remember"])) 
  {
    $username = $_POST['username'];
    $password  = $_POST['password'];
    setcookie ('username',$_POST['username'],time()+10);
    setcookie ('password',$_POST['password'],time()+10);
    echo "cookie  set successfully";

  } 
  else 
  {
    setcookie("username","");
    setcookie("password","");
    echo "cookie not set";
  }  

   if(isset($_POST['submit']))
   { 
    $username = $_POST['username'];
    $password  = $_POST['password'];
    if($username == "" || $password == "")
    {
        echo "null input...";
    }
    else
    {
        $status= validationUser($username, $password);

        if($status)
        {
           $_SESSION['flag']=true;
           $_SESSION['username']=$username;
           $_SESSION['password']=$password;
           header('location: ../view/homeeCus.php');
        }
        else
        {
            echo "UserName or password is Incorrect!!!";
        }
    }
}
?>


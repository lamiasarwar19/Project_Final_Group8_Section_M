<!DOCTYPE html>
<html>
<head>
    
    <title>Signup</title>
    <link rel="stylesheet" href="../css/style.css">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">
    <script type="text/javascript" src="../js/regcheckCus.js"></script>
    <link rel="stylesheet" href="../css/back.css">
</head>
<body> 
    
    <div class="menu-bar">
    <ul>
        <li ><img src="../photos/MabLogo.png" height="70px"></li>
        <li class="active"><a href="Contact.html"><i class="fa fa-compress"></i>Contact</a></li>
        <li><a href="login.php"><i class="fa fa-sign-in"></i>Login</a></li>
    </ul>
    </div>
   
   <div class="reg">
       <div>
    <table border="1" width="100%" align="center" height="400px">
        <td align="center">
            
            <form id="reg" name="reg" method="post" action="../controller/regcheckCus.php" onSubmit="return validate()">               
                <fieldset style="width:320px" >
                    <legend>
                        <h3>
                            REGISTRATION
                        </h3>
                    </legend>
                    <table align="center" height="400px" >
                        <tr>
                            <td>Name :<br></td>
                            <td><input type="text" id="name"  name="name" value=""placeholder="Enter your Name" Class="name" onkeyup="validatename()"><h4 id="namemsg"></h4></td>
                        </tr>
            
                        <tr>
                            <td>Email : <br></td>        
                            <td><input type="email" id="email" name="email" value=""placeholder="Enter your email Adress" class="name"  onkeyup="validateemail()"><h4 id="emailmsg"></h4></td>
                        </tr>
            
                        <tr>
                            <td>User Name :<br></td>
                            <td><input type="text" id="username" name="username" value=""  placeholder="Enter Username" Class="name"  onkeyup="validateusername()"><h4 id="usernamemsg"></h4></td>
                        </tr>
                        <tr>
                            <td>Password :</td>        
                            <td><input type="password" id="password" name="password" value="" placeholder="Enter password" class="name" onkeyup="validatepassword()" ><h4 id="passwordmsg"></h4></td>
                        </tr>
            
                        <tr >
                            <td>Confirm Password :<br></td>
                            <td><input type="password" id="re_password"name="re_password" value="" placeholder="Re-enter password" class="name" onkeyup="validatepassword()"><h4 id="passwordmsg"></h4></td>
                        </tr>
    
                        <tr height='30px'>
                            <td colspan="2">
                                <fieldset>
                                    <legend>Gender</legend>
                                    <input type="radio" id="male"   name="gender" value="Male"   onclick="validategender()"> Male
                                    <input type="radio" id="female" name="gender" value="Female" onclick="validategender()"> Female
                                    <input type="radio" id="others" name="gender" value="Other"  onclick="validategender()"> Other<br><h4 id="gendermsg"></h4><br>
                                </fieldset>
                            </td>
                        </tr>
    
                        <tr>        
                            <td colspan="2">
                                <fieldset>
                                    <legend>Date of Birth</legend>
                                    <input type="date" id="dob" name="dob" value="" Class="name" onclick="validatedate()"><h4 id="dateofbirthmsg"></h4>
                                </fieldset>
                            </td>
                        </tr> 
    
                        <tr align="right">
                            <td  height=" 50px">
                                <input type="submit" name="submit" class="sub" value="Submit">
                                <input type="reset" name="click" value="reset">
                            </td>
                        </tr>
                    </table>
                </fieldset>
            </form>
        </td>
        </table>
        </div>

        </div>


    <div class="menu-bar">
        <ul>
            <li class="active">Copyright2021@MAB</a></li>
        </ul>
    </div>
    
</body>
</html>
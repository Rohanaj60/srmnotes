<?php
// We need to use sessions, so you should always start sessions using the below code.
session_start();
// If the user is  logged in redirect to the dashboard page...
if (isset($_SESSION['user'])) {
	header('Location: dashboard.php');
	exit;
}
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Admin Login</title>

    <style>
      * {
            margin: 0;
            padding: 0;
            box-sizing: border-box;
            font-size: 16px;

        }
        .wrapper{
            height:100vh;
            max-width:1199px;
            margin:auto;
             /* border:2px solid red; */
            display:flex;
            align-items:center;
            justify-content: space-around;
        }
        .img-area{
          
            text-align:center;
            width:50%
        }
        .login-area{
            padding:3rem;
            border-left:1px solid grey;
            width:50%;
            
            display:flex;
            justify-content: space-between;
            flex-direction:column;
        }
        .img-area img{
            display:inline;
         width:500px;
        }
        .form-section{
            height:50vh;
            display:flex;
            flex-direction:column;
            /* justify-content:space-around; */
        
        }
#input-d{
    border-radius:1rem;
    height:3rem;
    padding:1rem;
    width:60%;
    margin:1rem 0;
    border:2px solid grey;
  
  /* border-style:none; */
}
.title h1{
    font-family: acumin-pro, -apple-system, BlinkMacSystemFont, "Segoe UI", Roboto, "Helvetica Neue", Arial, "Noto Sans", sans-serif, "Apple Color Emoji", "Segoe UI Emoji", "Segoe UI Symbol", "Noto Color Emoji";
            font-size: 22px;
            font-weight: 600;
            line-height: 44.8px;
            color: rgb(0, 0, 0);
            margin:1rem 0;
}
#lblid{
    font-family: acumin-pro, -apple-system, BlinkMacSystemFont, "Segoe UI", Roboto, "Helvetica Neue", Arial, "Noto Sans", sans-serif, "Apple Color Emoji", "Segoe UI Emoji", "Segoe UI Symbol", "Noto Color Emoji";
            font-size: 18px;
            font-weight: 400;
            line-height: 25.8px;
            color: rgb(0, 0, 0);
}
.btn{
    background:#8B57F9;
    color:white;
    border-radius:1rem;
    height:3rem;
    width:60%;
    /* margin:auto; */
  
    border-style:none;
}
.btn:hover{
    
    cursor:pointer;

}
.error-msg{
    width:60%;
    /* border:2px solid red; */
}
.error-msg h3{
margin-top:1rem;
text-align:center;
color:red;
font-family: acumin-pro, -apple-system, BlinkMacSystemFont, "Segoe UI", Roboto, "Helvetica Neue", Arial, "Noto Sans", sans-serif, "Apple Color Emoji", "Segoe UI Emoji", "Segoe UI Symbol", "Noto Color Emoji";
            font-size: 15px;
            font-weight: 400;
            line-height: 25.8px;
     
}
    </style>

<?php
include 'dbconn.php';

      


?>
</head>
<body>
<div class="wrapper">
<div class="img-area">
<img src="images/admin.png" alt="lsls">

<!-- <img src="images/admin-logo-min.jpg" alt="lsls"> -->
   </div>

   <div class="login-area">
       <div class="title">
<h1>
    Login as Admin 


</h1>
       </div>
<div >
    <form  class="form-section" action="login.php" method="post">
    <label  id="lblid" for="uname">Username</label>
    <input id="input-d" type="text" name="uname" placeholder="username" >
    <label id="lblid"  for="pass">Password</label>
    <input id="input-d" type="password" placeholder="password" name="pass">
<button type="submit" class="btn">
    Login
</button>
<div class="error-msg">
        <h3>
            <?php
            if($_SERVER['REQUEST_METHOD'] == 'POST'){
                $username = $_POST['uname'];
                $password = $_POST['pass'];
           
                $sql = "select * from admin where username = '$username' and password = '$password'";
                $result =  mysqli_query($link,$sql);
                // $row = mysqli_fetch_array($result);
                $row = mysqli_fetch_array($result, MYSQLI_ASSOC);  
                $count = mysqli_num_rows($result); 
            
                    
               
                if ($count ==1 )
                {
                    session_start();
                    $_SESSION ['user'] = $username;
                   
                    header("Location: admin.php");
                
                }
                else {
                    echo"Invalid Username or Password";
                }
            }
            ?>

            <!-- Invalid Username or Password -->

        </h3>
    </div>
    </form>
  
  


</div>

   </div>
</div>    

</body>
</html>

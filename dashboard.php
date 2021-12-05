<?php
// We need to use sessions, so you should always start sessions using the below code.
session_start();
// If the user is not logged in redirect to the login page...
if (!isset($_SESSION['user'])) {
	header('Location: index.html');
	exit;
}
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Admin Dashboard</title>
    <style>
             * {
            margin: 0;
            padding: 0;
            box-sizing: border-box;
            font-size: 16px;

        }
        .wrapper{
            height:100vh;  
            /* border: 2px solid red; */
        }
        .left-menu{
            /* border: 2px solid red; */
            background-color: #44506f;
            height:100vh; 
width:20%;
        }
        .right-area{
            padding:3rem;
            width:70%;
            margin: 1rem auto;
            /* border: 2px solid red; */
        }
        .logo-img{
            text-align: center;
        }
        .logo-img img{
            width:40%;
            margin: auto;
        }
        .list-menu li a{
text-decoration: none;

font-family: Lato, sans-serif;

font-size: 14px;

Font-weight: 400;

Line-height: 21px;

color: rgb(255, 255, 255);
list-style:none;

        }
        .list-menu li {
            margin:1rem 0;
            font-family: acumin-pro, -apple-system, BlinkMacSystemFont, "Segoe UI", Roboto, "Helvetica Neue", Arial, "Noto Sans", sans-serif, "Apple Color Emoji", "Segoe UI Emoji", "Segoe UI Symbol", "Noto Color Emoji";
            font-size: 35px;
            font-weight: 400;
            line-height: 25.8px;
            text-align: center;
        }
        .subject-list {
            font-family: acumin-pro, -apple-system, BlinkMacSystemFont, "Segoe UI", Roboto, "Helvetica Neue", Arial, "Noto Sans", sans-serif, "Apple Color Emoji", "Segoe UI Emoji", "Segoe UI Symbol", "Noto Color Emoji";


            color: rgb(0, 0, 0);
            display: flex;
            flex-direction: row;
            justify-content: space-between;
            /* border: 2px solid red; */
            margin: 0;

        }
        .subject-list1 {
            font-family: acumin-pro, -apple-system, BlinkMacSystemFont, "Segoe UI", Roboto, "Helvetica Neue", Arial, "Noto Sans", sans-serif, "Apple Color Emoji", "Segoe UI Emoji", "Segoe UI Symbol", "Noto Color Emoji";


            color: rgb(0, 0, 0);
            display: flex;
            flex-direction: row;
            justify-content: space-between;
            /* border: 2px solid red; */
            margin: 0;

        }

        #sub-style {


            display: flex;
            width: 21%;
            flex-direction: column;
            justify-content: space-evenly;
            align-items: center;
            text-align: center;
            background-color: #FFFFFF;
            border-radius: 1rem;
            text-decoration: none;
            /* box-shadow: rgba(0, 0, 0, 0.16) 0px 1px 4px; */
            box-shadow: rgba(99, 99, 99, 0.2) 0px 2px 8px 0px;
        }

        #sub-style img {
            width: 80%;
            margin: 0 auto;
            margin-bottom: 0.4rem;
            padding: 1rem;
            /* border: 1px solid green; */
        }
        .wrapper{

            display: flex;
        }
        #big-heading{
            margin:1rem 0;
            padding:2rem;
            font-family: acumin-pro, -apple-system, BlinkMacSystemFont, "Segoe UI", Roboto, "Helvetica Neue", Arial, "Noto Sans", sans-serif, "Apple Color Emoji", "Segoe UI Emoji", "Segoe UI Symbol", "Noto Color Emoji";
            font-size: 3rem;
            font-weight: 600;
            line-height: 25.8px;
            color:black;
            text-align: center;
        }
        #para{
            margin:1rem 0;
            padding:1rem;
            font-family: acumin-pro, -apple-system, BlinkMacSystemFont, "Segoe UI", Roboto, "Helvetica Neue", Arial, "Noto Sans", sans-serif, "Apple Color Emoji", "Segoe UI Emoji", "Segoe UI Symbol", "Noto Color Emoji";
            
            font-weight: 600;
            line-height: 25.8px;
            color:black;
            text-align: center;
        }
    </style>
    <script ></script>

</head>
<body>

    <div class="wrapper">
        <div class="left-menu">
            <ul class=list-menu>
                <div class="logo">
                    <div class="logo-img">
                        <img src="images/heropng.png" alt="hero-logo">
    
                    </div>
                   
                </div>
    
                <li><a href="dashboard.php" onclick="">Home</a></li>
                <li><a href="addnotes.php">Add Notes</a></li>
                <li><a href="addpapers.php" onclick="">Add Papers</a></li>
                <!-- <li><a href="addsubjects.php" onclick="">Add Subject</a></li> -->
                <li><a href="modifynotes.php" onclick="">Modify Notes</a></li>
                <li><a href="modifypapers.php" onclick="">Modify Papers</a></li>
                <!-- <li><a href="modifysubjects.php" onclick="">Modify Subjects</a></li> -->
                <li><a href="logout.php">Logout</a></li>
    
            </ul>
        </div>
        <div class="right-area">
            <div class="subject-list">
                <div id="sub-style">
                    <div class="sub1">
                        <h1 id="big-heading">

                        <?php
require 'dbconn.php';

    $sql =   "select * from notes";
    $result = mysqli_query($link,$sql);
    $rowcount=mysqli_num_rows($result);
    echo $rowcount;
    ?>

                        </h1>
                        <p id="para">
                            Total Notes

                        </p>
                    </div>
                </div>
                <div id="sub-style">
                    <div class="sub1">
                        <h1 id="big-heading">
                        <?php
require 'dbconn.php';

    $sql =   "select * from papers";
    $result = mysqli_query($link,$sql);
    $rowcount=mysqli_num_rows($result);
    echo $rowcount;
    ?>

                        </h1>
                        <p id="para">
                            
                            Total Papers

                        </p>
                    </div>
                </div>
                <div id="sub-style">
                    <div class="sub1">
                        <!-- <img src="images/ece.png" alt=""> -->
                        <h1 id="big-heading">
                        <?php
require 'dbconn.php';

    $sql =   "select * from subjects";
    $result = mysqli_query($link,$sql);
    $rowcount=mysqli_num_rows($result);
    echo $rowcount;
    ?>
                        </h1>
                        <p id="para">
                            Total Subjects

                        </p>
                    </div>
                </div>
                <div id="sub-style">
                    <div class="sub1">
                        <h1 id="big-heading">4</h1>
                        <p id="para">
                            Total Streams

                        </p>
                    </div>
                </div>
            </div>
    </div>
</body>
</html>
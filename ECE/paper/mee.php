<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>


    <style>
        * {
            margin: 0;
            padding: 0;
            box-sizing: border-box;
            font-size: 16px;

        }

        .nav-menu {
            border: 2px solid rgb(177, 176, 176)(59, 74, 84);
            width: 100%;



            background: #FFFFFF;
        }

        .list-menu {

            display: flex;
            flex-direction: row;
            justify-content: space-around;
            align-items: center;
            list-style: none;
            font-family: 'Zen Kurenaido', sans-serif;
            /* border: 2px solid yellow; */
        }

        .list-menu li {

            text-align: center;

        }

        .list-menu a {
            text-decoration: none;
            color: black;
            vertical-align: center;
            /* font-size: 1rem; */
            font-size: 14px;
            font-family: acumin-pro, -apple-system, BlinkMacSystemFont, "Segoe UI", Roboto, "Helvetica Neue", Arial, "Noto Sans", sans-serif, "Apple Color Emoji", "Segoe UI Emoji", "Segoe UI Symbol", "Noto Color Emoji";
            font-weight: 400;

            line-height: 21px;


            color: rgb(59, 74, 84);
            /*border: 2px solid white;*/

        }

        .list-menu li :hover {

            color: rgb(10, 208, 244);
        }

        .logo {
            /* border: 1px solid green; */
            margin-top: 0;
            color: #49DCF7;
            align-items: center;
            /* vertical-align: center; */
            display: flex;
            width: 13%;
        }

        .logo h1 {
            font-family: acumin-pro, -apple-system, BlinkMacSystemFont, "Segoe UI", Roboto, "Helvetica Neue", Arial, "Noto Sans", sans-serif, "Apple Color Emoji", "Segoe UI Emoji", "Segoe UI Symbol", "Noto Color Emoji";
            font-size: 32px;
            font-weight: 600;
            line-height: 44.8px;
        }

        .logo-img img {
            margin-top: .3rem;
            width: 100%;
            /* border: 1px solid red; */
        }

        .hero-section {
            background-color: #FFF6E8;
            border-top: 1px solid rgb(216, 216, 216);
            display: flex;
            align-items: center;
            justify-content: space-around;

        }

        .hero-section .right-part {
            /* margin: 1rem; */
        }

        .hero-section .left-part {
            /* margin: 2rem; */
        }

        .hero-section .left-part h1 {
            font-family: acumin-pro, -apple-system, BlinkMacSystemFont, "Segoe UI", Roboto, "Helvetica Neue", Arial, "Noto Sans", sans-serif, "Apple Color Emoji", "Segoe UI Emoji", "Segoe UI Symbol", "Noto Color Emoji";
            font-size: 32px;
            font-weight: 600;
            line-height: 44.8px;
            color: rgb(0, 0, 0);

        }

        .hero-section .left-part p {
            font-family: acumin-pro, -apple-system, BlinkMacSystemFont, "Segoe UI", Roboto, "Helvetica Neue", Arial, "Noto Sans", sans-serif, "Apple Color Emoji", "Segoe UI Emoji", "Segoe UI Symbol", "Noto Color Emoji";
            font-size: 14px;
            font-weight: 400;
            line-height: 21px;
            color: rgb(59, 74, 84);

        }

        .hero-section .right-part img {
            width: 90%;
        }

        #pmargin {
            margin-top: 1rem;

        }

        .outer-wrapper {
            background-color: #F6F8F9;
            padding-top: 4rem;

        }

        .material-wrapper {
            max-width: 1190px;
            margin: 0 auto;
            margin-bottom: 5rem;
            /* border: 2px solid red; */

        }

        .material-wrapper h1 {
            font-family: acumin-pro, -apple-system, BlinkMacSystemFont, "Segoe UI", Roboto, "Helvetica Neue", Arial, "Noto Sans", sans-serif, "Apple Color Emoji", "Segoe UI Emoji", "Segoe UI Symbol", "Noto Color Emoji";

            font-size: 24px;
            font-weight: 600;
            line-height: 33.6px;
            color: rgb(0, 0, 0);

            /* border: 2px solid red; */
            padding-bottom: 3rem;

            background-color: #F6F8F9;
        }

        .subject-list {
            font-family: acumin-pro, -apple-system, BlinkMacSystemFont, "Segoe UI", Roboto, "Helvetica Neue", Arial, "Noto Sans", sans-serif, "Apple Color Emoji", "Segoe UI Emoji", "Segoe UI Symbol", "Noto Color Emoji";


            color: rgb(0, 0, 0);
            display: flex;
            flex-direction: row;
            flex-wrap:wrap;
     justify-content:space-evenly;
        margin:auto;
            /* border: 2px solid red; */
        

        }

        #sub-style {


            display: flex;
            width: 13%;
            flex-direction: column;
            justify-content: space-evenly;
            align-items: center;
            text-align: center;
            background-color: #FFFFFF;
            border-radius: 1rem;
            margin-bottom: 4rem;
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

        .sub1 {}

        #para {
            /* padding: 1rem 0; */
            font-family: acumin-pro, -apple-system, BlinkMacSystemFont, "Segoe UI", Roboto, "Helvetica Neue", Arial, "Noto Sans", sans-serif, "Apple Color Emoji", "Segoe UI Emoji", "Segoe UI Symbol", "Noto Color Emoji";
            text-align: center;
            font-size: 14px;
            font-weight: 600;
            line-height: 33.6px;
            color: rgb(0, 0, 0);
        }

        .footer-section {
            width: 100%;
            background-color: #1B1B1B;
            
            text-align: center;
            
            margin: auto;
        }

        .footer-menu1 a {
            font-family: acumin-pro, -apple-system, BlinkMacSystemFont, "Segoe UI", Roboto, "Helvetica Neue", Arial, "Noto Sans", sans-serif, "Apple Color Emoji", "Segoe UI Emoji", "Segoe UI Symbol", "Noto Color Emoji";
            text-decoration: none;
            color: white;
            /* color: rgb(83, 110, 123); */
            /* font-family: verdana; */
            /* font-size: 1rem; */
            margin: 1rem;
            font-size: 14px;
            font-weight: 400;
            line-height: 21px;

        }

        .footer-menu1 li {
            list-style: none;
            text-align: left;
        }

        .footer-text {
            display: flex;
            flex-direction: row;
            justify-content: space-around;
        }

        .footer-right {
            /*postion: absolute;*/
            /*bottom: 1rem;*/
            color: #56656C;
            width: 100%;
            margin: 1rem auto;
            text-align: center;
        }
    </style>
</head>

<body>
    <div class="nav-menu">

        <ul class=list-menu>
            <div class="logo">
                <div class="logo-img">
                    <img src="../../images/heropng.png" alt="hero-logo">

                </div>
                <div class="logo-name">
                    <h1>srmnotes</h1>

                </div>
            </div>

    
            <li><a href="../../index.html">Home</a></li>
            <li><a href="../../aboutus.php">About US</a></li>
            <li><a href="../../contactus.php">Contact US</a></li>
            <li><a href="../../login.php">Admin</a></li>

        </ul>
    </div>

  
    <div class="outer-wrapper">
        <div class="material-wrapper">
            <h1>Notes for Computer Science And Engineering</h1>
            <div class="subject-list">

<?php
include_once("../../dbconn.php");
error_reporting(E_ALL ^ E_WARNING); 
$sql = "select * from papers where subject_id = 27"; //query
$result = mysqli_query($link, $sql); // executing query and  storing  in result
$rowcount=mysqli_num_rows($result);
if ($rowcount == 0){
    echo '<h2> Not Any Subject Found </h2> ';

}
else {




while($row = mysqli_fetch_array($result)) {
 //using this while loop with colon we can use block of code at once and end the loop at end
?>
   <a href="../../uploads/<?php echo $row['paper_file']; ?>" id="sub-style">
                    <div class="sub1">
                        <img src="../../images/pdf.png" alt="">
                        <p id="para">
                       <?php echo $row['paper_name']; ?>

                        </p>
                    </div>
                </a>
           

<?php
}
}  // above we use colon so we can write this to end that loop
?>

 </div>
            
        </div>
 
    </div>
    <div class="footer-section">
        <div class="footer-text">
            <ul class=footer-menu1>


                <a href="">
                    <li>Home</li>
                </a>
                <a href="">
                    <li>Notes</li>
                </a>
                <a href="">
                    <li>Previous Year Paper</li>
                </a>
                <a href="">
                    <li>Contact US</li>
                </a>
                <a href="">
                    <li></li>
                </a>
                <a href="">
                    <li></li>
                </a>
                <a href="">
                    <li></li>
                </a>
                <a href="">
                    <li></li>
                </a>

            </ul>
            <ul class=footer-menu1>


               
                <a href="">
                    <li>Computer Science And Engineering</li>
                </a>
                <a href="">
                    <li>Civil Engineering</li>
                </a>
                <a href="">
                    <li>Electronic And Communication Engineering</li>
                </a>
                <a href="">
                    <li>Mechanical Engineering</li>
                </a>

            </ul>

        </div>

    </div>
    <div class="footer-right">
        ©Copyright 2021 | Made with ❤️ By SRM(Suraj,Rohan,Mukesh)
    </div>
</body>

</html>
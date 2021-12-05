<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>About US</title>


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


        #pmargin {
            margin-top: 1rem;

        }

        .outer-wrapper {
            background-color: #F6F8F9;
            padding-top: 4rem;
            height:80vh;
            /* border: 2px solid green; */
            
            height:140vh;;
        }

        .material-wrapper {
            box-shadow: rgba(0, 0, 0, 0.1) 0px 4px 12px;
            max-width: 1190px;
            margin: 0 auto;
            margin-bottom: 5rem;
            padding:3rem;
            /* border: 2px solid red; */
            background-color:#A4BCDD;
            height:80vh;
            

        }

        .material-wrapper h1 {
            font-family: acumin-pro, -apple-system, BlinkMacSystemFont, "Segoe UI", Roboto, "Helvetica Neue", Arial, "Noto Sans", sans-serif, "Apple Color Emoji", "Segoe UI Emoji", "Segoe UI Symbol", "Noto Color Emoji";

            font-size: 24px;
            font-weight: 600;
            line-height: 33.6px;
            color: rgb(0, 0, 0);

            /* border: 2px solid red; */
            padding-bottom: 3rem;

            background-color:#A4BCDD;
        }
    .team-heading h1{
        font-family: acumin-pro, -apple-system, BlinkMacSystemFont, "Segoe UI", Roboto, "Helvetica Neue", Arial, "Noto Sans", sans-serif, "Apple Color Emoji", "Segoe UI Emoji", "Segoe UI Symbol", "Noto Color Emoji";
            text-decoration: none;
            color: white;
           
            /* margin-: 1rem; */
            font-size: 2.8rem;
            font-weight: 600;
            line-height: 40px;
            text-align:center;
    }
    .teampara{
        font-family: acumin-pro, -apple-system, BlinkMacSystemFont, "Segoe UI", Roboto, "Helvetica Neue", Arial, "Noto Sans", sans-serif, "Apple Color Emoji", "Segoe UI Emoji", "Segoe UI Symbol", "Noto Color Emoji";
            text-decoration: none;
            color: #DDE5F0;
           
            margin-bottom: 4rem;
            font-size: 1rem;
            font-weight: 500;
            line-height: 30px;
            text-align:center;
    }
    .team-area p{
        margin-bottom:4rem;
    }
    .card-wrapper{
        position:absolute;
        
        display:flex;
        bottom:-15.0rem;
justify-content:space-between;
        width:72%;
        margin:auto;
    
    }
    .card-img{
        /* width:70%; */
        /* border:2px solid red; */
        margin-bottom:1rem;
     
    }
    .card-img img{
        width:55%;
        
        /* width: 200px;
  height: 200px; */
  /* border:2px solid red; */
        border-radius :50%;
        box-shadow: rgba(0, 0, 0, 0.17) 0px -23px 25px 0px inset, rgba(0, 0, 0, 0.15) 0px -36px 30px 0px inset, rgba(0, 0, 0, 0.1) 0px -79px 40px 0px inset, rgba(0, 0, 0, 0.06) 0px 2px 1px, rgba(0, 0, 0, 0.09) 0px 4px 2px, rgba(0, 0, 0, 0.09) 0px 8px 4px, rgba(0, 0, 0, 0.09) 0px 16px 8px, rgba(0, 0, 0, 0.09) 0px 32px 16px;
    }
    .card1{
        width:100%;
        margin:auto;
        
        text-align:center;
        /* border:2px solid green; */
        padding:0.5rem;
    }
    .card1 h3{
        font-family: acumin-pro, -apple-system, BlinkMacSystemFont, "Segoe UI", Roboto, "Helvetica Neue", Arial, "Noto Sans", sans-serif, "Apple Color Emoji", "Segoe UI Emoji", "Segoe UI Symbol", "Noto Color Emoji";
            text-decoration: none;
            color: black;
           
            margin-bottom: 1rem;
            font-size: 1.2rem;
            font-weight: 600;
            line-height: 30px;
            text-align:center;
    }
    

    </style>
</head>

<body>
    <div class="nav-menu">

        <ul class=list-menu>
            <div class="logo">
                <div class="logo-img">
                    <img src="images/heropng.png" alt="hero-logo">

                </div>
                <div class="logo-name">
                    <h1>srmnotes</h1>

                </div>
            </div>
            <li><a href="index.html">Home</a></li>
            <li><a href="aboutus.php">About US</a></li>
            <li><a href="contactus.php">Contact US</a></li>
           
            <li><a href="login.php">Admin</a></li>

        </ul>
    </div>

  
    <div class="outer-wrapper">
        <div class="material-wrapper">
    <div class="team-heading">
        <div class="team-info">
        <h1>About US</h1>
<p class = "teampara">
    
With 1 years experience as a professional Web developer, We have acquired the skills and knowledge necessary to make your project a success. We enjoy every step of the design process, from discussion and collaboration
</p>
        </div>

        <div class="team-area">
<h1>Our Team Members</h1> 
<p class = "teampara">

We are working with the best developers around the world 
    </p>
    <div class="card-wrapper">
    <div class="card1">
    <div class="card-img">
        
        <img src="images/potrait-square.jpg" alt="">
    </div>
    <h3>
        Rohan
    </h3>
    <p>
        Full Stack Developer
    </p>
</div>
<div class="card1">
    <div class="card-img">
        
    <img src="images/potrait-square.jpg" alt="">
    </div>
    <h3>
        Suraj
    </h3>
    <p>
        Frontend Developer
    </p>
</div>
<div class="card1">
    <div class="card-img">
        
    <img src="images/potrait-square.jpg" alt="">
    </div>
    <h3>
        Mukesh
    </h3>
    <p>
        Frontend Developer
    </p>
</div>

    </div>

        </div>


    </div>
    
        </div>
 
    </div>
    <?php

include 'footer.php';
?>
</body>

</html>
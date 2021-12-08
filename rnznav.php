<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>


    <style>
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
</body>
</html>


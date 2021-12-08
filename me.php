<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Mechanical Engineering Notes</title>


    <style>
    * {
        margin: 0;
        padding: 0;
        box-sizing: border-box;
        font-size: 16px;

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
        flex-wrap: wrap;

        justify-content: space-around;
        /* margin:auto; */
        /* border: 2px solid red; */


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

   
    </style>
</head>

<body>
    <?php
include 'rnznav1.php';
?>


    <div class="outer-wrapper">
        <div class="material-wrapper">
            <h1>Notes for Computer Science And Engineering</h1>
            <div class="subject-list">


                <a href="me/notes/cad-cam.php" id="sub-style">
                    <div class="sub1">
                        <img src="images/mechanics-logo.png" alt="">
                        <p id="para">
                            CAD-CAM

                        </p>
                    </div>
                </a>
                <a href="me/notes/h3.php" id="sub-style">
                    <div class="sub1">
                        <img src="images/mechanics-logo.png" alt="">
                        <p id="para">
                            H3

                        </p>
                    </div>
                </a>
                <a href="me/notes/m3.php" id="sub-style">
                    <div class="sub1">
                        <img src="images/mechanics-logo.png" alt="">
                        <p id="para">
                            M3

                        </p>
                    </div>
                </a>
                <a href="me/notes/mee.php" id="sub-style">
                    <div class="sub1">
                        <img src="images/mechanics-logo.png" alt="">
                        <p id="para">
                            ME

                        </p>
                    </div>
                </a>
                <a href="me/notes/mmm.php" id="sub-style">
                    <div class="sub1">
                        <img src="images/mechanics-logo.png" alt="">
                        <p id="para">
                            MMM

                        </p>
                    </div>
                </a>
                <a href="me/notes/mp.php" id="sub-style">
                    <div class="sub1">
                        <img src="images/mechanics-logo.png" alt="">
                        <p id="para">
                            MP

                        </p>
                    </div>
                </a>

            </div>

        </div>

    </div>
    <?php

include 'footer.php';
?>
</body>

</html>
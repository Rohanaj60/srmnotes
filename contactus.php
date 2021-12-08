<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Contact US</title>


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

    .contact-section-wrapper {
        width: 100%;
        /* background-color: #0099ff; */
        /* background-color:#FFF6E8; */
    }

    .contact-us-section {

        padding-top: 3rem;
        padding-bottom: 3rem;
        max-width: 1600px;
        margin: auto;
        width: 100%;
        position: relative;
    }

    .contact-line {
        display: none;
    }

    .form-wrapper {
        display: flex;
        flex-direction: row;
        /* border: 2px solid #0099ff; */
        width: 90%;
        margin: auto;
        background-color: #A4BCDD;

    }

    .contact-para {
        text-align: center;
        font-family: 'Merienda', cursive;
        /* border: 2px solid #0099ff; */

    }

    .contact-area {
        margin-top: 3rem;
        width: 30%;
        margin: auto;

        /* border: 2px solid #0099ff; */
    }

    .contact-heading {
        text-align: center;
        font-family: 'Dancing Script', cursive;
        font-size: 1.5rem;
        background-color: #FFF6E8;
        /* border: 2px solid #0099ff; */

    }

    .icon-text {
        margin: 3rem auto;
        display: flex;
        flex-direction: column;
        justify-content: center;
        align-items: center;
        width: 100%;
        text-align: center;
        font-family: 'Segoe UI', Tahoma, Geneva, Verdana, sans-serif;
        font-size: 1.1rem;

        /* border: 2px solid red; */
    }

    .icon-text i {
        margin-bottom: 0.1rem;
    }

    .my-profile {
        text-align: center;
        width: 100%;


        height: 3rem;
        /* border: 2px solid red; */
    }

    .my-profile i {
        color: black;

    }

    .form-area {
        margin-top: 3rem;
        display: flex;
        flex-direction: column;
        /* border: 2px solid #0099ff; */
        width: 40%;
    }

    .input-area {
        margin: 1rem;
        padding: 1rem;
        border-radius: 0.5rem;
        outline: none;
        border-style: solid;
        border-width: 0.01rem;
    }

    textarea {
        resize: none;
    }

    .form-btn {
        width: 50%;
        margin: auto;
        border-radius: 40px;
        height: 3rem;
        outline: none;
        border-style: solid;
        background-color: black;
        color: white;
        border-width: 0.01rem;
    }

    .form-btn:hover {
        cursor: pointer;
    }


   
    </style>
</head>

<body>
    <?php
include 'rnznav1.php';
?>


    <div class="outer-wrapper">
        <div class="material-wrapper">

            <div class="contact-section-wrapper">
                <div class="contact-us-section" id="contact-us">

                    <div class="contact-heading">

                        <h1>Get In Touch</h1>

                    </div>
                    <hr class="line">
                    <div class="contact-para">
                        <h2>
                            Feel free to say hello
                        </h2>
                    </div>
                    <div class="form-wrapper">
                        <form action="" class="form-area">

                            <input type="text" required class="input-area" placeholder="Your Name">
                            <input type="text" required class="input-area" placeholder="Your Name">
                            <textarea name="ccc" required class="input-area" id="" placeholder="Message " cols="30"
                                rows="10"></textarea>
                            <button type="submit" class="form-btn">Send Message</button>
                        </form>

                        <div class="contact-area">
                            <hr class="contact-line">
                            <div class="icon-text">
                                <i class="fas fa-map-marker-alt"></i>
                                <p>
                                    Ramgram-2,Parasi,Nepal

                                </p>

                            </div>
                            <div class="icon-text">
                                <i class="fas fa-phone-alt"></i>
                                <p>

                                    +9779805417150
                                </p>

                            </div>
                            <div class="icon-text">
                                <i class="fas fa-envelope"></i>
                                <p>
                                    psrohanjoshi@gmail.com
                                </p>
                            </div>
                            <hr class="line">
                            <div class="my-profile">
                                <a href="https://www.facebook.com/Rohanaj60"><i class="fab fa-facebook fa-3x"></i></a>
                                <a href="https://www.linkedin.com/in/rohan-joshi-858bb3195/">
                                    <i class="fab fa-linkedin fa-3x"></i>

                                </a>
                                <a href="https://github.com/Rohanaj60">
                                    <i class="fab fa-github fa-3x"></i>

                                </a>

                            </div>

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
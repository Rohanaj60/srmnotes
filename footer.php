

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <style>
        
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

        @media only screen and (max-width: 768px) {
            * {
      font-size: 14px;
     
    }
            .footer-section {
          display:flex;
          flex-direction:column;

            }
            .footer-menu1 li {
       
            text-align: center;
        }
            .footer-text {
            
            display: flex;
            flex-direction: column;
            /* justify-content: space-around; */
        }
        .footer-menu1 a {
          
            margin: 0.1rem;
            font-size: 10px;
            font-weight: 400;
            line-height: 11px;

        }
            .outer-wrapper {
            background-color: #F6F8F9;
            padding-top: 4rem;

        }

        .material-wrapper {
            max-width: 90%;
            margin: 0 auto;
            margin-bottom: 5rem;
          

        }

        .material-wrapper h1 {
            font-family: acumin-pro, -apple-system, BlinkMacSystemFont, "Segoe UI", Roboto, "Helvetica Neue", Arial, "Noto Sans", sans-serif, "Apple Color Emoji", "Segoe UI Emoji", "Segoe UI Symbol", "Noto Color Emoji";

            font-size: 20px;
            font-weight: 600;
            line-height: 23.6px;
            color: rgb(0, 0, 0);

            /* border: 2px solid red; */
            padding-bottom: 3rem;

            background-color: #F6F8F9;
        }

        .subject-list {
      
            display: flex;
            flex-direction: column;
            justify-content: space-between;
          
            margin-bottom: 1rem;
            margin: 0;

        }

        #sub-style {

            /* border: 2px solid green;
             */
            display: flex;
            width: 60%;
            margin:auto;
            flex-direction: column;
            justify-content: space-between;
          
            margin-bottom: 1rem;
        
     
        }

        #sub-style img {
            width: 50%;
            margin: 0 auto;
            margin-bottom: 0.4rem;
            padding: 1rem;
            /* border: 1px solid green; */
        }

        .sub1  {
            width:100%;
      }
        .sub1 img {
            width:100%;
     }
        #para {
            /* padding: 1rem 0; */
            font-family: acumin-pro, -apple-system, BlinkMacSystemFont, "Segoe UI", Roboto, "Helvetica Neue", Arial, "Noto Sans", sans-serif, "Apple Color Emoji", "Segoe UI Emoji", "Segoe UI Symbol", "Noto Color Emoji";
            text-align: center;
            font-size:13px;
            font-weight: 600;
            line-height: 23.6px;
            color: rgb(0, 0, 0);
        }
        .hero-section {
            margin-top:1rem;
            font-size:13px;
           padding:2rem;
            background-color: #FFF6E8;
            border-top: 1px solid rgb(216, 216, 216);
            display: flex;
            align-items: center;
            justify-content: space-between;
 
        }




     

        .hero-section .left-part h1 {
            font-family: acumin-pro, -apple-system, BlinkMacSystemFont, "Segoe UI", Roboto, "Helvetica Neue", Arial, "Noto Sans", sans-serif, "Apple Color Emoji", "Segoe UI Emoji", "Segoe UI Symbol", "Noto Color Emoji";
            font-size: 20px;
            font-weight: 600;
            line-height: 30px;
            color: rgb(0, 0, 0);

        }

        .hero-section .left-part p {
            font-family: acumin-pro, -apple-system, BlinkMacSystemFont, "Segoe UI", Roboto, "Helvetica Neue", Arial, "Noto Sans", sans-serif, "Apple Color Emoji", "Segoe UI Emoji", "Segoe UI Symbol", "Noto Color Emoji";
            font-size: 12px;
            font-weight: 400;
            line-height: 17px;
            color: rgb(59, 74, 84);
          
        }
        .hero-section .right-part  {
         width:60%;
             
        }

        .hero-section .right-part img {
            width: 100%;
        }
        }
  
    </style>
</head>
<body>
  
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


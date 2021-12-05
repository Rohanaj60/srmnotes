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
            overflow:hidden;
        }

        .wrapper {
            height: 100vh;
            /* border: 2px solid red; */
        }

        .left-menu {
            /* border: 2px solid red; */
            background-color: #44506f;
            height: 100vh;
            width: 20%;
        }

        .right-area {
            padding: 3rem;
            width: 70%;
            margin: 1rem auto;
            /* border: 2px solid red; */
        }

        .logo-img {
            text-align: center;
        }

        .logo-img img {
            width: 40%;
            margin: auto;
        }

        .list-menu li a {
            text-decoration: none;

            font-family: Lato, sans-serif;

            font-size: 14px;

            Font-weight: 400;

            Line-height: 21px;

            color: rgb(255, 255, 255);
            list-style: none;

        }

        .list-menu li {
            margin: 1rem 0;
            font-family: acumin-pro, -apple-system, BlinkMacSystemFont, "Segoe UI", Roboto, "Helvetica Neue", Arial, "Noto Sans", sans-serif, "Apple Color Emoji", "Segoe UI Emoji", "Segoe UI Symbol", "Noto Color Emoji";
            font-size: 35px;
            font-weight: 400;
            line-height: 25.8px;
            text-align: center;
        }

        .wrapper {

            display: flex;
        }

        .form-section {
            height: 100vh;
            display: flex;
            flex-direction: column;
            /* justify-content:space-around; */

        }

        #input-d {
            border-radius: 1rem;
            height: 3rem;
            padding: 1rem;
            width: 60%;
            margin: 1rem 0;
            border: 1px solid black;
            /* border-sy */

            /* border-style:none; */
        }

        #input-d1 {
            border-radius: 1rem;
            height: 3rem;
            padding: .5rem;
            width: 60%;
            margin: 1rem 0;
            /* border:2px solid grey; */

            /* border-style:none; */
        }

        .btn {
            background: #8B57F9;
            color: white;
            border-radius: 1rem;
            height: 3rem;
            width: 60%;
            /* margin:auto; */

            border-style: none;
        }
        .error-msg {
        width: 60%;
        /* border:2px solid red; */
    }
        .error-msg h3 {
        margin-top: 1rem;
        text-align: center;
        color: red;
        font-family: acumin-pro, -apple-system, BlinkMacSystemFont, "Segoe UI", Roboto, "Helvetica Neue", Arial, "Noto Sans", sans-serif, "Apple Color Emoji", "Segoe UI Emoji", "Segoe UI Symbol", "Noto Color Emoji";
        font-size: 15px;
        font-weight: 400;
        line-height: 25.8px;

    }
        .btn:hover {

            cursor: pointer;

        }

        #lblid {
            font-family: acumin-pro, -apple-system, BlinkMacSystemFont, "Segoe UI", Roboto, "Helvetica Neue", Arial, "Noto Sans", sans-serif, "Apple Color Emoji", "Segoe UI Emoji", "Segoe UI Symbol", "Noto Color Emoji";
            font-size: 18px;
            font-weight: 400;
            line-height: 25.8px;
            color: rgb(0, 0, 0);
        }

        #input-file {
            border-radius: 1rem;
            height: 3rem;
            /* margin:2rem; */
            width: 60%;
            padding: 1rem;
            border: 1px solid black;
            /* margin:5rem 0; */
            margin: 1.2rem 0;

        }
    </style>
<script type="text/javascript" src="js/jquery.js"></script>
<script type="text/javascript">
  $(document).ready(function(){
  	function loadData(type, category_id){
  		$.ajax({
  			url : "addnote.php",
  			type : "POST",
  			data: {type : type, id : category_id},
  			success : function(data){
  				if(type == "subjectData"){
  					$(".select_subjects").html(data);
  				}else{
  					$(".select_streams").append(data);
  				}
  				
  			}
  		});
  	}

  	loadData();

  	$(".select_streams").on("change",function(){
  		var streams = $(".select_streams").val();

  		if(streams != ""){
  			loadData("subjectData", streams);
  		}else{
  			$(".select_subjects").html("");
  		}

  		
  	})
  });
</script>

     
    </script>
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
                <li><a href="addnotes.php" onclick="addNotes()">Add Notes</a></li>
                <li><a href="addpapers.php" onclick="addpapers.php">Add Papers</a></li>
                <li><a href="addsubjects.php" onclick="addsubject.php">Add Subject</a></li>
                <li><a href="modifynotes.php" onclick="">Modify Notes</a></li>
                <li><a href="modifypapers.php" onclick="">Modify Papers</a></li>
                <li><a href="modifysubjects.php" onclick="">Modify Subjects</a></li>

                <li><a href="logout.php">Logout</a></li>

            </ul>
        </div>
        <div class="right-area">

            <div>
                <form class="form-section" action="modifysubjects.php" method="post" name="frm" id="frm">

                
                    <label id="lblid" for="select-streams">Select Streams</label>
                    <select id="input-d1" name="select-streams" class="select_streams">
                       
                        <option value="" disabled selected>--- Select Streams ---</option>
                      
                    </select>

                    <label id="lblid" for="select-streams">Select Subject</label>
                    <select id="input-d1" name="select-subject" class="select_subjects">
                          
                    <option value="" disabled selected>--- Select Subjects ---</option>
                    </select>

                    <label id="lblid" for="sub-title"> Subject Name</label>
                    <input id="input-d" type="text" name="sub-title" placeholder="Subject Name">

                    <button type="submit" class="btn">
                  
                        Modify Subject Name
                    </button>
                 

                    <div class="error-msg">
                        <h3>
                            <?php
             
           
             include 'dbconn.php';
             if($_SERVER['REQUEST_METHOD'] == 'POST'){
                 $subject_id = $_POST['select-subject'];
                 $streams_id = $_POST['select-streams'];
                 $sub_mod = $_POST ['sub-title'];
                //  echo $subject_id."<br>";
                //  echo $streams_id."<br>";
                //  echo $sub_mod."<br>";
             
                 // $sql_create = "CREATE TABLE IF NOT EXISTS `$streams` (snid int primary key NOT NULL AUTO_INCREMENT , Subject_Name varchar(255))";
                 $sql =   "update subjects set Subject_Name = '$sub_mod' where stream_id = '$streams_id' ";
                 // $sql = "INSERT INTO me  (`snid`, `Stream_Name`) VALUES (NULL, '$subject_name)";
                 //  $result1 = mysqli_query($link,$sql_create);
                 $result = mysqli_query($link,$sql);
                 if($result){
                     echo "Sucessfully Modified to $sub_mod";

                 }
                 else {
                     echo("Failed To Modified ");
                 }

             }
        
             
                 


                ?>

                        </h3>
                    </div>
                </form>





            </div>

        </div>
    </div>
</body>
<script>
//control form resubmission
if (window.history.replaceState) {
    window.history.replaceState(null, null, window.location.href);
}
</script>
</html>
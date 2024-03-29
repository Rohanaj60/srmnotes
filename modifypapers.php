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
    /* .btn1 {
        background: #8B57F9;
        color: white;
        border-radius: 1rem;
        height: 5rem;
        width: 100%;
        /* margin:auto; */

        /* border:2px solid black; */

        .mod-values{
        height: 3rem;
        /* border:1px solid black; */
        width: 20%;
        background: #8B57F9;
        border-radius: 1rem;
        text-align:center;
        vertical-align:center;
        padding:1rem;
        margin:0 0 2rem 0;
    }
    .mod-values a{
        margin-top:1rem;
      text-decoration:none;
      color:white;
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
  			url : "addpaper.php",
  			type : "POST",
  			data: {type : type, id : category_id},
  			success : function(data){
  				if(type == "subjectData"){
  					$(".select_subjects").html(data);
  				}
                else if (type == "notesData")
                {
                    $(".select_notes").html(data);
                }  
                else{
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
 
  		}
          else{
  			$(".select_subjects").html("");
  		}
  		
  	})


      $(".select_subjects").on("change",function(){
  		
          var subjects = $(".select_subjects").val();

          if(subjects != ""){
  			
              loadData("notesData", subjects);
  		}
          else{
  			$(".select_notes").html("");
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
                <!-- <li><a href="addsubjects.php" onclick="addsubject.php">Add Subject</a></li> -->
                <li><a href="modifynotes.php" onclick="">Modify Notes</a></li>
                <li><a href="modifypapers.php" onclick="">Modify Papers</a></li>
                <!-- <li><a href="modifysubjects.php" onclick="">Modify Subjects</a></li> -->
                <li><a href="logout.php">Logout</a></li>

            </ul>
        </div>
        <div class="right-area">
        <div class="mod-values">
                       
                       <a href="modifypaper.php" class="btn1">Modify PDF</a>
                    </div>
            <div class="text-update">
                <form class="form-section" enctype="multipart/form-data"  method="post">
                    <label id="lblid" for="notes-title">Title</label>
                    <input id="input-d" type="text" name="notes-title" required placeholder="Notes Title">
                    <label id="lblid" for="select-streams">Select Streams</label>
                    <select id="input-d1" name="select-streams" class="select_streams">
                       
                        <option value="" disabled selected>--- Select Streams ---</option>
                      
                    </select>

                    <label id="lblid" for="select-subject">Select Subject</label>
                    <select id="input-d1" name="select-subject" class="select_subjects">
                          
                    <option value="" disabled selected>--- Select Subjects ---</option>
                    </select>

                    <label id="lblid" for="select-subject">Select Papers</label>
                    <select id="input-d1" name="select-notes" class="select_notes">
                          
                    <option value="" disabled selected>--- Select Papers ---</option>
                    </select>
                  
                    <button type="submit" name="submit" class="btn">
                       Modify Paper
                    </button>
                    <button type="submit" name="submitd" class="btn" style ="margin-top:1rem">
                      Delete Paper
                    </button>
                    <div class="error-msg">
                        <h3>

     
                        <?php
require 'dbconn.php';
if (isset($_POST["submit"]))
 {
     #retrieve file title
     $subject_id = $_POST["select-subject"];
        $title = $_POST["notes-title"];
        $paper_id = $_POST["select-notes"];
    
 
    #sql query to insert into database
    // $sql = "INSERT into notes VALUES(null,'$title','$pname','$subject_id)";
    $sql =   "update papers set paper_name = '$title' where sn = '$paper_id' ";
 
    if(mysqli_query($link,$sql)){
 
    echo "File Update Sucessfully";
    }
    else{
        echo("Error ");
    }
}
if (isset($_POST["submitd"]))
 {
     #retrieve file title
     $subject_id = $_POST["select-subject"];
        $title = $_POST["notes-title"];
        $paper_id = $_POST["select-notes"];
    
 
    #sql query to insert into database
    // $sql = "INSERT into notes VALUES(null,'$title','$pname','$subject_id)";
    $sql =   "delete from papers where sn = '$paper_id' ";
 
    if(mysqli_query($link,$sql)){
 
    echo "File Deleted Sucessfully";
    }
    else{
        echo("Error ");
    }
}

?>



                        </h3>
                    </div>
                   
                </form>



               


            </div>



<!-- if you want to modified along with pdf files -->



        </div>
    </div>
</body>

</html>






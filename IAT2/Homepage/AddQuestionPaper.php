<?php session_start();
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "IAT";

// Create connection
$conn = new mysqli($servername, $username, $password, $dbname);
// Check connection
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
} 

?>



<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <!-- The above 3 meta tags *must* come first in the head; any other head content must come *after* these tags -->

    <link rel="icon" href="../favicon.ico">

    <title>Home</title>

    <!-- Bootstrap core CSS -->
    <link href="../dist/css/bootstrap.min.css" rel="stylesheet">

    <!-- IE10 viewport hack for Surface/desktop Windows 8 bug -->
    <link href="../assets/css/ie10-viewport-bug-workaround.css" rel="stylesheet">

    <!-- Custom styles for this template -->
    <link href="dashboard.css" rel="stylesheet">
     <link href="submit.css" rel="stylesheet">
     <script type="text/javascript">
       
       var fakeProgress = function() {
  var $btn = $(".submit"),
    percent = $btn.attr("data-percent")
      ? Number($btn.attr("data-percent")) + 1
      : 0;
  if (percent >= 0 && percent <= 100) {
    $btn.attr("data-percent", percent);
  } else {
    $btn
      .removeAttr("data-percent")
      .removeClass("loader loading")
      .addClass("success");
    clearInterval(progress);
  }
};

$(".submit:not(disabled)").click(function() {
  $(this)
    .prop("disabled", true)
    .addClass("loader")
    .on("transitionend", function() {
      progress = setInterval(fakeProgress, 10);
      $(this)
        .addClass("loading")
        .off("transitionend");
    });
});


     </script>

    <!-- Just for debugging purposes. Don't actually copy these 2 lines! -->
    <!--[if lt IE 9]><script src="../../assets/js/ie8-responsive-file-warning.js"></script><![endif]-->
    <script src="../assets/js/ie-emulation-modes-warning.js"></script>

        <style type="text/css">
     
     h4{
      font-style:COPPERPLATE GOTHIC;
          border-radius: 25px;
    border: 2px solid #73AD21;
    padding: 20px; 
    width: 700px;
    height: 80px; 
     } 

     .tb5 {
  border:2px solid #456879;
  border-radius:10px;
  height: 22px;
  width: 250px;
}
/*
     .tb3 {
  border: 2px dashed #111111;
  width: 600px 600px;
  border-left-padding: 500px;
}*/
/*#rcorners2 {
    border-radius: 25px;
    border: 2px solid #73AD21;
    padding: 20px; 
    width: 200px;
    height: 150px; 
}*/

    </style>

    <!-- HTML5 shim and Respond.js for IE8 support of HTML5 elements and media queries -->
    <!--[if lt IE 9]>
      <script src="https://oss.maxcdn.com/html5shiv/3.7.3/html5shiv.min.js"></script>
      <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
    <![endif]-->
  </head>

  <body>

    <nav class="navbar navbar-inverse navbar-fixed-top">
      <div class="container-fluid">
        <div class="navbar-header">
          <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#navbar" aria-expanded="false" aria-controls="navbar">
            <span class="sr-only">Toggle navigation</span>
            <span class="icon-bar"></span>
            <span class="icon-bar"></span>
            <span class="icon-bar"></span>
          </button>
          <a class="navbar-brand" href="#">Hi

                  <?php 
                if(isset($_SESSION['status']))
                {
                  echo $_SESSION['unm']; 
                }
                else
                { 
                  echo ' error';
                }
              ?>


          </a>
        </div>
        <div id="navbar" class="navbar-collapse collapse">
          <ul class="nav navbar-nav navbar-right">
           <!--  <li><a href="#">Dashboard</a></li>
            <li><a href="#">Settings</a></li>
            <li><a href="#">Profile</a></li> -->
            <li><a href="http://localhost/IAT2/index.php">Logout</a></li>
          </ul>
        </div>
      </div>
    </nav>

    <div class="container-fluid">
      <div class="row">
        <div class="col-sm-3 col-md-2 sidebar">
          <ul class="nav nav-sidebar">
            <li ><a href="CIHome.php">Your Details <span class="sr-only">(current)</span></a></li>
            <li class="active"><a href="AddQuestionPaper.php">Add Question Paper</a></li>
            <li><a href="uploaded_qp.php">Uploaded question papers</a></li>
            <li><a href="ChangesSentByCCI.php">Changes Suggested by CCI</a></li>
          </ul>
        </div>
        <div class="col-sm-9 col-sm-offset-3 col-md-10 col-md-offset-2 main">
          <h1 class="page-header">Hi


                  <?php 
                if(isset($_SESSION['status']))
                {
                  echo $_SESSION['unm']; 
                }
                else
                { 
                  echo ' error';
                }
              ?>


          </h1>

<form  action="uploadqp.php" method="POST" enctype="multipart/form-data" >
            
             <div class="container">
             <div class="row">
             <div class="col-md-6">
        
           
              
              
              
                <div class="form-group files">
                  <label>Upload Your File </label>
                  <input type="file" class="form-control" name="qp">
                </div><br><br>

        <!--       <div class="group" > 
              <label>Question Paper Name</label>     
              <input type="int" class="tb5" name="name" required placeholder=" your name ">
              <span class="highlight"></span>
              <span class="bar"></span>
              </div><br><br> -->


              <button class="submit"><span>Submit</span></button>
  
        
              </div>
              </div>
              </div>

  </form>

  <!--  <div class="group" > 
              <label>Name</label>     
              <input type="int" class="tb5" required>
              <span class="highlight"></span>
              <span class="bar"></span>
              </div> -->



         <!--  <div class="row placeholders">
            <div class="col-xs-6 col-sm-3 placeholder">
              <img src="data:image/gif;base64,R0lGODlhAQABAIAAAHd3dwAAACH5BAAAAAAALAAAAAABAAEAAAICRAEAOw==" width="200" height="200" class="img-responsive" alt="Generic placeholder thumbnail">
              <h4>Label</h4>
              <span class="text-muted">Something else</span>
            </div> -->

    <!-- Bootstrap core JavaScript
    ================================================== -->
    <!-- Placed at the end of the document so the pages load faster -->
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.4/jquery.min.js"></script>
    <script>window.jQuery || document.write('<script src="../assets/js/vendor/jquery.min.js"><\/script>')</script>
    <script src="../dist/js/bootstrap.min.js"></script>
    <!-- Just to make our placeholder images work. Don't actually copy the next line! -->
    <script src="../assets/js/vendor/holder.min.js"></script>
    <!-- IE10 viewport hack for Surface/desktop Windows 8 bug -->
    <script src="../assets/js/ie10-viewport-bug-workaround.js"></script>
  </body>
</html>
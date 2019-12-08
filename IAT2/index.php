<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="utf-8">
  <title>IAT QP Management System</title>
  <meta content="width=device-width, initial-scale=1.0" name="viewport">
  <meta content="" name="keywords">
  <meta content="" name="description">

  <!-- Favicons -->
  <!-- <link href="img/favicon.png" rel="icon"> -->
  <!-- <link href="img/apple-touch-icon.png" rel="apple-touch-icon"> -->

  <!-- Google Fonts -->
  <link href="https://fonts.googleapis.com/css?family=Oswald:400,300,700|EB+Garamond" rel="stylesheet">

  <!-- Bootstrap CSS File -->
  <link href="lib/bootstrap/css/bootstrap.min.css" rel="stylesheet">

  <!-- Libraries CSS Files -->
  <link href="lib/font-awesome/css/font-awesome.min.css" rel="stylesheet">

  <!-- Main Stylesheet File -->
  <link href="css/style.css" rel="stylesheet">




</head>

<body data-spy="scroll" data-offset="0" data-target="#theMenu">

  <!-- Menu -->
  <nav class="menu" id="theMenu">
    <div class="menu-wrap">
      <h1 class="logo"><a href="#"> Home</a></h1>
      <i class="fa fa-times-circle menu-close"></i>
      <a href="#" class="smoothscroll">Home</a>
      <!-- <a href="#" class="smoothscroll">About</a> -->
      <a href="#" class="smoothscroll"><a href="http://localhost/IAT2/Login/index.html">Login</a></a>
     
    </div>

    <!-- Menu button -->
    <div id="menuToggle"><i class="fa fa-bars"></i></div>
  </nav>

  <!-- ========== HEADER SECTION ========== -->
  <section id="home" name="home"></section>
  <div id="headerwrap">
    <div class="container">
      <div class="logo">
       <h2 style="color: white;"><a href="http://localhost/IAT2/index.php"> Home</a> </h2> 
      </div>
      <br>
      <div class="row">
        <h1>IAT Question Paper Management System</h1>
        <br>
        
        <br>
        <br>
        <div class="col-lg-6 col-lg-offset-3">
        </div>
      </div>
    </div>
    <!-- /container -->
        <button type="button" class="btn btn-default" style="width: 200px; height:60px; font-size: 30px;"><a href="#regs">Register!</a></button>
</div>

  <!-- /headerwrap -->

  <!-- ========== ABOUT SECTION ========== -->

<form action="submit.php" method="POST" >

  <!-- ========== CONTACT SECTION ========== -->
  <section id="contact" name="contact"></section>
  <div id="f">
    <div class="container">
      <div class="row">
        <h3><a id="regs"></a>Register</h3>
        <p class="centered"><i class="icon icon-circle"></i><i class="icon icon-circle"></i><i class="icon icon-circle"></i></p>

      </div>

      <div class="row">
        <div class="col-md-6 col-md-offset-3">

          <form class="contact-form php-mail-form" role="form" action="submit.php">


            <div class="form-group">
              <label for="contact-name" style="color: white;">Name</label>
              <input type="name" name="name" class="form-control" id="contact-name" placeholder="Your Name" data-rule="minlen:4" data-msg="Please enter at least 4 chars" >
              <div class="validate"></div>
            </div>
            <div class="form-group">
              <label for="contact-email" style="color: white;" >Email</label>
              <input type="email" name="email" class="form-control" id="contact-email" placeholder="Your Email" data-rule="email" data-msg="Please enter a valid email">
              <div class="validate"></div>
            </div>

       <div class="form-group">
        <div>
        <label for="contact-email" style="color: white;" > Password</label>
        <input type="Password" name="Password" class="form-control"  placeholder="Your Password" data-rule="Password" data-msg="Please enter a valid password">
        </div>   
        </div><br><br>

                <div class="form-group"> 
         <label class="col-md-4 control-label" style="color: white;" >Choose Profile</label>
          <div class="col-md-4 selectContainer">
          <div class="input-group">
           <span class="input-group-addon"><i class="glyphicon glyphicon-list"></i></span>
           <select name="options" class="form-control selectpicker">
                  <option value="">Select one</option>
                  <option>Course Instructor - CI</option>
                  <option>Chief Course Instructor - CCI</option>
                  <option >Test Coordinator - TC</option>
          </select>
        </div>
        </div>
        </div><br><br><br>

      



      <div class="form-group">

       <label class="col-md-4 control-label" style="color: white;" >Choose Semester</label>
        <div class="col-md-4 selectContainer">
        <div class="input-group">
         <span class="input-group-addon"><i class="glyphicon glyphicon-list"></i></span>
         <select name="sem" class="form-control selectpicker">
                <option value="">Select one</option>
                <option>1</option>
                <option>2</option>
                <option>3</option>
                <option>4</option>
                <option>5</option>
                <option>6</option>
                <option>7</option>
                <option>8</option>
        </select>
      </div>
      </div>
      </div><br>

      <p>
        
      </p>
</br>



       <div class="form-group">

       <label class="col-md-4 control-label" style="color: white;" >Choose Subject</label>
        <div class="col-md-4 selectContainer">
        <div class="input-group">
         <span class="input-group-addon"><i class="glyphicon glyphicon-list"></i></span>
         <select name="subject" class="form-control selectpicker">
                <option value="">Select one</option>
                <?php
                    
                    
                  $servername = "localhost";
                  $username = "root";
                  $password = "";
                  $dbname = "IAT";
                  

                  $conn = new mysqli($servername, $username, $password, $dbname);

                  if ($conn->connect_error) {
                         die("Connection failed: " . $conn->connect_error);
                        } 


                      $query="select SubjectName from Subjects";
      
                      $res=mysqli_query($conn,$query);
                      
                      while($row=mysqli_fetch_assoc($res))
                      {
                        echo "<option enable>".$row['SubjectName'];
                        
                        
                      }
                      
                ?>
               
        </select>
      </div>
      </div>
      </div><br>

          <p>
        
           </p>
          </br>




        <div class="form-group">
        <div ><br><br>
        <button type="submit" class="btn btn-warning"> SUBMIT <span class="glyphicon glyphicon-send"></span></button>
        </div>
        </div>


    </form>

        </div>
      </div>
    </div>
  </div>
</form>
  <!-- JavaScript Libraries -->
  <script src="lib/jquery/jquery.min.js"></script>
  <script src="lib/bootstrap/js/bootstrap.min.js"></script>
  <script src="lib/php-mail-form/validate.js"></script>
  <script src="lib/easing/easing.min.js"></script>

  <!-- Template Main Javascript File -->
  <script src="js/main.js"></script>

</body>
</html>

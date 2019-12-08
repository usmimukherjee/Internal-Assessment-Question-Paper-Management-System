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

$QP_code = $_POST['QP_code'];
$confirmation=$_POST['confirmation'];

$q1 = "update Question_paper set Confirmed ='$confirmation' where QP_code = $QP_code ";

$q2 = " update Question_paper set VerifiedbyCCI=1 where QP_code=$QP_code ";

$res1 = mysqli_query($conn,$q1) or die("Can't Execute Query...");

$row = mysqli_fetch_assoc($res1);

		
if ($conn->query($q2) === TRUE) { 
   				
   		header("location:CCIHome.php");

   		}
			
else {
  				 
  		 echo "Error: " . $q1 . "<br>" . $conn->error;

 		}




?>
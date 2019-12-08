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

$q1 = "update Question_paper set Confirmed=0 where QP_code=$QP_code ";

$q2 = " update Question_paper set VerifiedbyCCI=1 where QP_code=$QP_code ";

$res=mysqli_query($conn,$q2) or die("Can't Execute Query...");

// $row=mysqli_fetch_assoc($res);


		
if ($conn->query($q1) === TRUE) { 
   				
   		header("location:nochanges.php");

   		}
			
else {
  				 
  		 echo "Error: " . $q1 . "<br>" . $conn->error;

 		}






?>
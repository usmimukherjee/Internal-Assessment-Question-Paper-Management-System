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


if( isset($_POST['Email']) and isset($_POST['Password']) ) {
		
		$Email=$_POST['Email'];
		$Password=$_POST['Password'];
 
		$ret=mysqli_query( $conn, "select * from  Staff where Email='$Email' and Password='$Password'") or die("Could not execute query: " .mysqli_error($conn));
		$row = mysqli_fetch_assoc($ret);
		
		$Options = mysqli_query( $conn ,"select Options from Staff where Email='$Email' and Password='$Password'") or die("Could not execute query: " .mysqli_error($conn));
		$rowx =mysqli_fetch_assoc($Options);
		if(!$row) {
			header("Location:../Login/index.html");
		 }
		
		else if($rowx['Options']=="Course Instructor - CI"){

					$_SESSION=array();
					$_SESSION['unm']=$row['Name'];
					$_SESSION['uid']=$row['Password'];
					$_SESSION['status']=true;

			header("Location:../Homepage/CIHome.php");
		}
		
		else if($rowx['Options']=="Chief Course Instructor - CCI"){

			$_SESSION=array();
					$_SESSION['unm']=$row['Name'];
					$_SESSION['uid']=$row['Password'];
					$_SESSION['status']=true;
			header("Location:../Homepage/CCIHome.php");
		}
		
		else if($rowx['Options']=="Test Coordinator - TC"){

			$_SESSION=array();
					$_SESSION['unm']=$row['Name'];
					$_SESSION['uid']=$row['Password'];
					$_SESSION['status']=true;
			header("Location:../Homepage/TCHome.php");
		}

		// else{
		// 	header("Location:../index.php");
		// }

}

?>

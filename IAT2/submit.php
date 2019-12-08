<?php
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "IAT";

$email=$_POST['email'];

$Password=$_POST['Password'];


$name=$_POST['name'];

$options=$_POST['options'];

$sem=$_POST['sem'];

$subject= $_POST['subject'];

// Create connection
$conn = new mysqli($servername, $username, $password, $dbname);
// Check connection
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
} 

$sql ="INSERT Into Staff(Email,Password,Name,Sem,Options,Subject) values('$email',
'$Password',
'$name',
$sem,
'$options','$subject')";
// if ($_POST['options'] == 'Chief Course Instructor - CCI' ) {
// 	# code...
// $CCI_id =" SELECT Staff_id from Staff where Email='$email'";
// $conn->query($CCI_id)or die(;

// $sql1 ="INSERT Into CCI(CCI_id,SubjectToVerify) values($CCI_id,'$subject')";
// $conn->query($sql1)or die();


// }





if ($conn->query($sql) === TRUE) {
    header("Location: Login/index.html");
} else {
    echo "Error: " . $sql . "<br>" . $conn->error;
}

$conn->close();
?>
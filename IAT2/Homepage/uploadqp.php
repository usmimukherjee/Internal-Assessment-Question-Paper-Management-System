<?php 

session_start();
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

else{


	$msg=array();
    if(isset($_POST))
	{

        if(empty($_FILES['qp']['name']))
		$msg[] = "Please provide a document file";
	
		if($_FILES['qp']['error']>0)
		$msg[] = "Error uploading document file";
		
		
		if(!((substr($_FILES['qp']['name'],-4))==".pdf" ||(substr($_FILES['qp']['name'],-4))==".doc"||(substr($_FILES['qp']['name'],-5))==".docx"))
			$msg[] = "wrong document file  type";
			
		if(file_exists("../upload_qp/".$_FILES['qp']['name']))
			$msg[] = "Document File already uploaded. Please do not updated with same name";
		
		if(!empty($msg))
		{
			echo '<b>Error:-</b><br>';
			
			foreach($msg as $k)
			{
				echo '<li>'.$k;
			}
		}
		else
		{
			move_uploaded_file($_FILES['qp']['tmp_name'],"../upload_qp/".$_FILES['qp']['name']);

			$QP ="upload_qp/".$_FILES['qp']['name'];

			 $q="select * from Staff where Name='$_SESSION[unm]'";
    		 $res=mysqli_query($conn,$q) or die("Can't Execute Query...");

      		 $row=mysqli_fetch_assoc($res);

     		 $q2 = "select * from Subjects where SubjectName='$row[Subject]' ";
      		$res2=mysqli_query($conn,$q2) or die("Can't Execute Query...");

     		 $rowx=mysqli_fetch_assoc($res2);
             
             $Subject_code = $rowx['Subject_code'];
             $Sem = $row['Sem'];
            // $QP =
             $CI_Id = $row['Staff_id'];

             $q3="INSERT into Question_paper(Subject_code,Sem,QP,CI_Id)values('$Subject_code',$Sem,'$QP',$CI_Id)";
             // $res3=mysqli_query($conn,$q3) or die("Can't Execute Query...");

      		 // $q5 = "select * from Question_Paper where"

      		 // $row3=mysqli_fetch_assoc($res3);

      		 // $QP_code = $row3['QP_code'];

      		 // $q4 = "INSERT into CI values($CI_Id,$QP_code)";

      		 // $res4=mysqli_query($conn,$q4) or die("Can't Execute Query...");
	
		
		
			if ($conn->query($q3) === TRUE) { 
   				
   				 header("location:AddQuestionPaper.php");

   				}
			else {
  				  echo "Error: " . $q3 . "<br>" . $conn->error;
				}
				
		
        }
   }

 }

?>
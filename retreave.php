<?php

 $servername = "localhost";
 $username = "root";
 $password = "";
 
 $conn = new mysqli($servername,$username,$password);
 
  if($conn->connect_error)
 {
   die("Connection failed: " . $conn->connect_error);
 }
 
 $db = mysqli_select_db($conn,"smartcard_db");

//get json data
 $EncodedData = file_get_contents('php://input');
 $DecodedData = json_decode($EncodedData,true);
 
 $FindStudentId = $DecodedData['FindStudentId'];
 
 $sql = "select * from student where student_id=$FindStudentId";
 $table = $conn->query($sql);
 
 if(mysqli_num_rows($table)>0)
  {
   $row = mysqli_fetch_assoc($table);
   $studentId = $row['student_id'];
   $studentFname = $row['student_fname'];
   $programme = $row['programme'];
   $year = $row['year'];
   $sem1pay = $row['sem1_pay'];
   $sem2pay = $row['sem2_pay'];
   $dir = "http://192.168.83.50:80/projects/smartcardAPI/profilePicture/".$row['student_id'].".png";
  }
 else
  {
   $studentId = "";
   $studentFname = "";
   $programme = "";
   $year = "";
   $dir = "";
   $sem1pay = "";
   $sem2pay = "";
  }
  
  $response[] = array("studentId"=>$studentId,"studentFname"=>$studentFname,"programme"=>$programme, "year"=>$year, "imgDir"=>$dir, "sem1_pay"=>$sem1pay, "sem2_pay"=>$sem2pay);
  echo json_encode($response);
?>



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
 
 $programme = $DecodedData['programme'];
 
 $sql = "select * from student where programme=$programme";
 $table = $conn->query($sql);
 
 if(mysqli_num_rows($table)>0)
  {
   $row = mysqli_fetch_assoc($table);
   $studentId = $row['student_id'];
   $studentFname = $row['student_fname'];
   $year = $row['year'];
  }
 else
  {
   $studentId = "";
   $studentFname = "";
   $year = "";
 
  }
  
  $response[] = array("studentId"=>$studentId,"studentFname"=>$studentFname,"year"=>$year);
  echo json_encode($response);
?>



<?php

 $servername = "localhost";
 $username = "root";
 $password = "";
 
 //create connection
 $conn = new mysqli($servername,$username,$password);
 
 //check connection
 if($conn->connect_error)
 {
   die("Connection failed: " . $conn->connect_error);
 }
 // select database
 $db = mysqli_select_db($conn,"udsmdb"); //check this out??
 
 //get json encoded data
 $EncodedData = file_get_contents('php://input');
 $DecodedData = json_decode($EncodedData,true);
 
 //initialize variables for web we use $_POST directly instead of $decodedData
 $studentId = $DecodedData['studentId'];
 $studentFname = $DecodedData['studentFname'];
 $programme = $DecodedData['programme'];
 $year = $DecodedData['year'];
 $sem1Pay = $DecodedData['sem1Pay'];
 $sem2Pay = $DecodedData['sem2Pay'];
 
 $quertData = "insert into student values ('$studentId','$studentFname','$programme',$year,$sem1Pay,$sem2Pay)";
 if($conn->query($quertData) === TRUE)
 {
   $message = "data inserted successfully";
 }
 else{
   $message = "Error inserting data: " .$conn->error;
 }
   $response[] = array("Message"=>$message);
   echo json_encode($response);
 

?>

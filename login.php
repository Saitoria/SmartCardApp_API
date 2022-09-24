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
 
 $loginName = $DecodedData['loginName'];
 $password = $DecodedData['password'];
 
 $sql = "select * from udsm_staff where staff_id=$loginName and staff_password='$password'";
 $table = $conn->query($sql);
 
 if(mysqli_num_rows($table)>0)
 {
 	$row = mysqli_fetch_assoc($table);
 	$access = true;
 	$message = "Login successful";
 	//$stuff = $row['staff_fname'];
 }
 else
 {
 	$access = false;
 	$message = "Login failed ".$conn->error;
 	//$stuff = "";
 }
 
 //$response[] = array("Access"=>$access,"Message:"=>$message, "Stuff"=>$stuff);
 $response[] = array("Access"=>$access,"Message"=>$message );
 echo json_encode($response)
 
 
 
 
?>

<?php
$link=mysqli_connect("localhost","root","","contactus");

if($link === false){
    die("ERROR: Could not connect. " . mysqli_connect_error());
}	

echo"Connected Successfully";
mysqli_get_host_info($link);

$firstname=mysqli_real_escape_string($link,$_REQUEST['firstname']);
$lastname=mysqli_real_escape_string($link,$_REQUEST['lastname']);
$mobileno=mysqli_real_escape_string($link,$_REQUEST['mobileno']);
$email=mysqli_real_escape_string($link,$_REQUEST['email']);
$query=mysqli_real_escape_string($link,$_REQUEST['query']);

$sql="INSERT INTO contacts (firstname,lastname,mobileno,email,query) VALUES('$firstname','$lastname','$mobileno','$email','$query')";

if(mysqli_query($link,$sql)){
	echo "Submitted, We will reach to you sooner";
}
else{
	echo "ERROR: Could not able to execute $sql. " . mysqli_error($link);
	}

mysqli_close($link);
?>
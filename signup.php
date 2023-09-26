<?php
$insert=false;
$error1="";
$error="";

if(isset($_POST['name'])){
    $server="localhost";
$username="root";
$password="";
$con=mysqli_connect($server,$username,$password);
if(!$con){
    die("Connection to the database failed due to". mysqli_connect_error());
    }
$name=$_POST['name']; 
$mailid=$_POST['mailid'];
$password=$_POST['password'];
$cnfrmpassword=$_POST['cnfrmpassword'];
//write sql query
$sql = "INSERT INTO `resumebuilder`.`signup` (`name`, `mailid`, `password`,`cnfrmpassword`) VALUES ('$name', '$mailid','$password', '$cnfrmpassword')";
if(!(strlen($name) && strlen($mailid) && strlen($password)  && strlen($cnfrmpassword))){
    $error= "*Error! Please Enter above field";
}
if(!($error)){
if($con->query($sql)==true){
    $insert=true;
}
}
if($insert){
    echo '<script type="text/javascript">
       alert("Registered successful!!");    
       window.location.href = "./userlogin.html";
  </script>';
}
else{
	echo '<script type="text/javascript">
       alert("Not Registered!!");    
       window.location.href = "./userlogin.html";
  </script>';
}
//close the database connection
$con->close(); 
}
?>

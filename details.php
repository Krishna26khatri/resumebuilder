<?php
require('dbconn.php');
$insert=false;
$error1="";
$error="";
if(isset($_POST['name'])){
    $firstname=$_POST['firstname'];
    $middlename=$_POST['middlename'];
    $lastname=$_POST['lastname'];
    $email=$_POST['email'];  
    $phoneno=$_POST['phoneno'];
    $address=$_POST['address'];  
    $edu_school=$_POST['edu_school'];
    $edu_degree=$_POST['edu_degree']; 
     $edu_city=$_POST['edu_city'];
    $edu_start_date=$_POST['edu_start_date']; 
     $edu_graduation_date=$_POST['edu_graduation_date'];
    $edu_score=$_POST['edu_score']; 
     $skill=$_POST['skill'];
    $achieve_title=$_POST['achieve_title'];
    $achieve_description=$_POST['achieve_description'];
    $proj_title=$_POST['proj_title']; 
     $proj_link=$_POST['proj_link'];
    $proj_description=$_POST['proj_description'];
    $exp_title=$_POST['exp_title'];
    $exp_organization=$_POST['exp_organization'];
    $exp_location=$_POST['exp_location'];
    $exp_start_date=$_POST['exp_start_date']; 
     $exp_end_date=$_POST['exp_end_date'];
    $exp_description=$_POST['exp_description'];

    $sql = "INSERT INTO `resumebuilder`.`userdetails` (`firstname`, `middlename`, `lastname`,`email`,`phoneno`, `address`, `lastname`,`email`) VALUES ('$firstname', '$middlename','$lastname', '$email','$phoneno', '$address','$lastname', '$email')";
// if(!(strlen($name) && strlen($mailid) && strlen($password)  && strlen($cnfrmpassword))){
//     $error= "*Error! Please Enter above field";
// }
if(!($error)){
if($con->query($sql)==true){
    $insert=true;
}
}
if($insert){
    echo '<script type="text/javascript">
       alert("Details Filled!!");    
       window.location.href = "./reume.html";
  </script>';
}
else{
	echo '<script type="text/javascript">
       alert("Notfilled!!");    
       window.location.href = "./userdetails.php";
  </script>';
}
}
?>
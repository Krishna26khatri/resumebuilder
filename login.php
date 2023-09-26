<?php
require('dbconn.php');
$insert=false;
$error1="";
$error="";
if(isset($_POST['name'])){
    $email=$_POST['name'];
    $password=$_POST['pass'];

    //write sql query
 $sql = "SELECT * FROM `signup` WHERE mailid='$email' and password='$password'";
 $sql1="INSERT INTO `login` (`mail`,`passwordd`) VALUES ('$email','$password')";
    $result = mysqli_query($con, $sql);
    if(!(strlen($email) &&  strlen($password))){
        $error= "*Error! Please Enter above field";
    }

    if($error==""){
        
        if(mysqli_num_rows($result)){
            echo '<script type="text/javascript"> alert("Login Successfully");
            window.location.href = "./userdetails.html";
            </script>';
        }
        
        else{
           echo '<script type="text/javascript"> alert("Invalid Credientials... \n Plz enter correct details!! OR  \n Register first!!");
           window.location.href = "./userlogin.html";
           </script>';
        
        }
        
    }
    else{
        echo '<script type="text/javascript">
       alert("Register First!!");    
       window.location.href = "./userlogin.html";
  </script>';
    }
        $con->close();
            }

?>
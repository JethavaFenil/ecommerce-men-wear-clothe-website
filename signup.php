<?php
$sn="localhost";
$un="root";
$pwd="";
$dn="project";
$conn=mysqli_connect($sn,$un,$pwd,$dn);
/*insert records*/
if(isset($_POST["submit"])){
  $name=$_POST["name"];    
  $email=$_POST["email"];
  $pwd=$_POST["pwd"];
  $rpwd=$_POST["rpwd"];
  if($pwd == $rpwd){
    $sql="insert into login (name,email,pwd,rpwd) values('$name','$email','$pwd','$rpwd')";
    $test=mysqli_query($conn,$sql);
    if($test){  
        header("Location: login.html");
   }  
  }
  else{  
        echo  '<script>
                alert("signup failed.password and confirm password does not match!!")
                window.location.href = "signup.html";
         </script>';
   }
}
<?php
$sn="localhost";
$un="root";
$pwd="";
$dn="project";
$conn=mysqli_connect($sn,$un,$pwd,$dn);
if (isset($_GET['submit'])) {
    $email = $_GET['email'];
    $password = $_GET['pwd'];
    $test = "select * from login where email = '$email' and pwd = '$password'";  
    $result = mysqli_query($conn, $test);  
    $row = mysqli_fetch_array($result, MYSQLI_ASSOC);  
    $count = mysqli_num_rows($result);  
    
    if($count == 1){  
         header("Location: home.php");
    }  
    else{  
         echo  '<script>
                 window.location.href = "login.html";
                 alert("Login failed. Invalid username or password!!")
          </script>';
    }     
}
?>
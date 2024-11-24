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
    $sql="insert into admin (name,email,pwd,rpwd) values('$name','$email','$pwd','$rpwd')";
    $test=mysqli_query($conn,$sql);
    if($test){  
        header("Location: adminlogin.php");
   }  
  }
  else{  
        echo  '<script>
                alert("signup failed.password and confirm password does not match!!")
                window.location.href = "adminsignup.php";
         </script>';
   }
}
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>CRUD</title>
    <link rel="stylesheet" href="adminstyle.css"></style>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.6.0/css/all.min.css" integrity="sha512-Kc323vGBEqzTmouAECnVceyQqyqdsSiqLQISBL29aUW4U/M7pSPA/gEUZQqv1cwx4OnYxTxve5UMg5GT6L4JJg==" crossorigin="anonymous" referrerpolicy="no-referrer" />
</head>
<body>
    <header>
        <div class="navbar">
              <a href="home.html"><img src="photos/logo.jpg" alt="Logo"></a>
              <a href="home.html"><p>ClickShop</p></a>
              <div class="navlinks">
                <a href="adminsignup.php">Sign Up</a>
                <a href="adminlogin.php">Log In</a>
                <a href="product.php">Product</a>
                <a href="insert.php">Insert</a>
                <a href="update.php">Update</a>
                <a href="delete.php">Delete</a>
                <a href="#" id="close"><i class="fa-solid fa-circle-xmark"></i></a>
              </div>
                <div class="mobile">
                  <i id="bar" class="fas fa-outdent"></i>
                </div>
          </div>
    </header>
    <main>
        <div class="container">
            <div class="admin-product-form-container">
            <form method="post" action="<?php $_SERVER['PHP_SELF'] ?>">
            <h3>Sign Up</h3>
            <div class="ic">
                <i class="fa-brands fa-google-plus"></i>
                <i class="fa-brands fa-facebook"></i>
                <i class="fa-brands fa-github"></i>
                <i class="fa-brands fa-linkedin"></i>
            </div>
            <p id="uye">or use your email and mobile number</p>
            <input type="text" placeholder="Username" required  name="name" value="" class="box"><br><br>
            <input type="email" placeholder="Email"required name="email" value="" class="box"><br><br>
            <input type="password" placeholder="Password" required name="pwd" id="pwd" class="box"><br><br>           
            <input type="password" placeholder="Confirm Password"required name="rpwd" id="rpwd" class="box"><br><br>
            <p id="fp1">already have an account ? <a href="login.php">Login Now</a></p><br>
            <input type="submit" value="Sign Up"  name="submit" class="btn"><br>
          </form>
        </div>
    </main>
    <footer>
      <div class="updates">
          <div class="ud">
           <p id="sub">Subscribe to our new Trends and Fashions</p>
           <p id="so">Get E-mail updates about our latest arrivals and <so>special offers.</so></p></div>
           <div class="emailb">
           <input type="text" placeholder="Your Email Address" id="email">
           <button id="signup">Sign Up</button></div>
      </div>
      <div class="mf">
        <div class="footermain">
           <a href="home.html"><img src="photos/logo.jpg" alt="Logo"></a>
           <a href="home.html"><p>ClickShop</p></a>
           <div class="footerlinks">
               <a href="#">About Us</a>
               <a href="#">Contact Us</a>
               <a href="#">Features</a>
               <a href="#">FAQs</a>
               <a href="#">Terms and Conditions</a>
           </div>
        </div>
        <hr>
        <div class="cpy">
          <div class="cp">
           <i class="fa-solid fa-copyright" id="cp"></i><p id="br">2022 Brand, inc.</p>
           <li>terms</li><li>conditions</li></div>
           <div class="t">
           <i class="fa-brands fa-twitter" id="twitter"></i>
           <i class="fa-brands fa-facebook" id="facebook"></i>
           <i class="fa-brands fa-linkedin" id="linkedin"></i>
           <i class="fa-brands fa-youtube" id="youtube"></i></div>
        </div>
      </div>
    </footer>
</body>
</html>
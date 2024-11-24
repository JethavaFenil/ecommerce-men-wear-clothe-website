<?php
$sn="localhost";
$un="root";
$pwd="";
$dn="project";
$conn=mysqli_connect($sn,$un,$pwd,$dn);
/*insert records*/
if(isset($_POST["add_product"]))
{
    $pid=$_POST['product_id'];
    $sql="delete from products where id='$pid'";
    $test=mysqli_query($conn,$sql);
    if($test == 1){  
        echo  '<script>
        alert("Record deleted successfully")</script>';
    }  
   else{  
    echo'<script>alert("Record not deleted try again")</script>';
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
               <form action="<?php $_SERVER['PHP_SELF'] ?>" method="post" enctype="multipart/form-data">
                  <h3>remove a product</h3>
                  <input type="number" placeholder="enter product id" name="product_id" class="box" required>
                  <input type="submit" class="btn" name="add_product" value="Remove Product">
               </form>
            </div>
        <div class="product-display">
           <table class="product-display-table">
              <thead>
              <tr>
                 <th>product id</th>
                 <th>product image</th>
                 <th>product name</th>
                 <th>product price</th>
                 <th>product detail</th>
              </tr>
              </thead>
              <?php /*Select query*/ 
                  $res=mysqli_query($conn,"SELECT* from products");
	     		        while($row=mysqli_fetch_array($res)) 
	     		        {
	     		        	  echo '<tr>
                        <td>'.$row['id'].'</td>
                        <td><img src="uploads/'.$row['image'].'" height="200"></td>
                        <td>'.$row['name'].'</td>
                        <td>'.$row['price'].'</td>
                        <td>'.$row['product_detail'].'</td>
                        <td>
                         <a href="update.php" class="btn"> <i class="fas fa-edit"></i> Edit </a>
                         <a href="delete.php" class="btn"> <i class="fas fa-trash"></i> Delete </a>
                        </td>
	     		        	  </tr>';
                  } 
              ?>
           </table>
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
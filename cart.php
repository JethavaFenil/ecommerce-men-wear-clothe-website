<?php 
session_start(); 
$sn="localhost";
$un="root";
$pwd="";
$dn="project";
$conn=mysqli_connect($sn,$un,$pwd,$dn);
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Surat Styles</title>
    <link rel="stylesheet" href="style.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.6.0/css/all.min.css" integrity="sha512-Kc323vGBEqzTmouAECnVceyQqyqdsSiqLQISBL29aUW4U/M7pSPA/gEUZQqv1cwx4OnYxTxve5UMg5GT6L4JJg==" crossorigin="anonymous" referrerpolicy="no-referrer" />
</head>
<body>
    <div class="container">
    <header>
      <div class="navbar">
            <a href="home.php"><img src="photos/logo.jpg" alt="Logo"></a>
            <a href="home.php"><p>ClickShop</p></a>
            <div class="navlinks">
                <a href="home.php">Home</a>
                <a href="shop.html">Shop</a>
                <a href="login.html">Log In</a>
                <a href="cart.html">Cart</a>
                <a href="aboutus.html">About Us</a>
                <a href="contactus.html">Contact Us</a>
                <a href="#" id="close"><i class="fa-solid fa-circle-xmark"></i></a>
            </div>
              <div class="search">
                  <i class="fa-solid fa-magnifying-glass" id="serch"></i>
                  <input type="text" id="serchbox" placeholder="Search">
              </div>    
              <div class="uc">
                <a href="#"><i class="fa-solid fa-user" id="user"></i></a>
                <a href="#"><i class="fa-solid fa-cart-shopping" id="cart"></i></a>
              </div>
              <div class="mobile">
                <i id="bar" class="fas fa-outdent"></i>
              </div>
        </div>
    </header>
    <main>
          <p id="abu">#Cart</p></div>
          <div class="cart">
            <table width="100%">
                <thead>
                    <tr>
                        <td>Id</td>
                        <td>Image</td>
                        <td>Product name</td>
                        <td>Price</td>
                        <td>Quantity</td>
                        <td>Total</td>
                        <td>Remove</td>
                    </tr>
                </thead>
                <tbody>
                  <?php
                    if(isset($_SESSION['carti']))
                    {
                       foreach($_SESSION['carti'] as $key => $value)
                       {
                           $sid=$value['item_id'];
                           $sql="select*from products where id=$sid";
                           $test=mysqli_query($conn,$sql);
                           while($row=mysqli_fetch_array($test))
                           {
                  ?>
                  <tr>
                    <td><?php echo $row["id"]; ?></td>
                    <td><img src="uploads/<?php echo $row['image'];?>" height="200"></td>
                    <td><?php echo $row["name"]; ?></td>
                    <td id="price"><?php echo $row["price"]; ?><input type="hidden" class="iprice" value="<?php echo $row["price"]; ?>"></td>
                    <td><input type="number" id="qua" min="1" max="10" value="<?php echo$value['quantity'];?>"class="iquantity" onchange="subtotal(),total()"></td>
                    <td class="itotal"></td>
                    <td>
                        <form action="managecart.php" method="post">
                            <button name="remove-item" id="removeitem"><i class="far fa-times-circle"></i></button>
                            <input type="hidden" name="item_id" value="<?php echo $sid;?>">
                        </form>
                    </td>
                </tr>
                  <?php }}} ?>
                </tbody>
            </table>
          </div>
          <div class="cart-add">
            <div class="subtotal">
                <h3>Cart total</h3>
                <table>
                <tr>
                        <td><strong>Total</strong></td>
                        <td id="gtotal"></td>
                    </tr>
                    <tr>
                        <td>Shipping</td>
                        <td>Free</td>
                    </tr>
                </table>
                <button>Proceed To Checkout</button>
            </div>
          </div>
          <div class="updates">
            <div class="ud">
             <p id="sub">Subscribe to our new Trends and Fashions</p>
             <p id="so">Get E-mail updates about our latest arrivals and <so>special offers.</so></p></div>
             <div class="emailb">
             <input type="text" placeholder="Your Email Address" id="email">
             <button id="signup">Sign Up</button></div>
          </div>
    </main>
    <footer>
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
</div>
<script>
  var gt=0;
  var iprice=document.getElementsByClassName('iprice');
  var iquantity=document.getElementsByClassName('iquantity');
  var itotal=document.getElementsByClassName('itotal');
  var gtotal=document.getElementById('gtotal');
  function subtotal(){
    gt=0;
    for(i=0;i<iprice.length;i++){
      itotal[i].innerText=(iprice[i].value)*(iquantity[i].value);
    }
  }
  function total(){
    gt=0;
    for(i=0;i<iprice.length;i++){
      gt=gt+(iprice[i].value)*(iquantity[i].value);
    }
    gtotal.innerText=gt;
  }
  total();
  subtotal();
</script>
</body>
</html>
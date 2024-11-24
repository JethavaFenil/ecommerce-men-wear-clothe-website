<?php
$sn="localhost";
$un="root";
$pwd="";
$dn="project";
$conn=mysqli_connect($sn,$un,$pwd,$dn);
$sql="select*from products";
$test=mysqli_query($conn,$sql);
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
        <div class="main-upper">
            <div class="main-photo">
                <a href="shop.html"><img src="photos/swbpx_512.webp"></a>
            </div>
            <div class="main-text">
                <div class="ndsn">
                <p id="nsa">New Season Arrivals</p>
                <p id="disc">Discover the latest trends in men's fashion</p>
                <a href="shop.html"><button id="sn">Shop Now</button></a></div>
            </div>
        </div>
        <p id="fp">Feutured Products</p>
        <div class="shop-section">
            <?php
              while($row=mysqli_fetch_assoc($test)){
            ?>
          <div class="box">
            <div class="box-content">
              <div class="boxi1">
                  <a href="#"><img src="uploads/<?php echo $row['image'];?>" height="200"></a>
                  <div class="desc">
                      <span><?php echo $row["name"]; ?></span>
                      <h5><?php echo $row["product_detail"]; ?></h5>
                      <div class="star">
                        <i class="fas fa-star"></i>
                        <i class="fas fa-star"></i>
                        <i class="fas fa-star"></i>
                        <i class="fas fa-star"></i>
                        <i class="fas fa-star"></i>
                      </div>
                      <h4>₹<?php echo $row["price"]; ?></h4>
                  </div>
                  <a href="#"><span>Show More</span></a><br><br>
                  <form action="managecart.php" method="post" enctype="multipart/form-data">
                     <button type="submit" name="add-cart" id="addtocart">Add to cart</button>
                     <input type="hidden" name="item_id" value="<?php echo $row['id'];?>">
                  </form>
              </div>
            </div>    
          </div>
          <?php } ?>
        </div>
          <p id="ocp">Our Collection</p>
          <div class="oc">
            <div class="content">
              <p>Shirts</p>
              <div class="shirts">
                <div class="shirts1"><a href="#"><img src="https://th.bing.com/th?id=OIP.7Fqp4TLUTBNfb5WDCLyDaQAAAA&w=216&h=288&c=8&rs=1&qlt=90&o=6&dpr=1.6&pid=3.1&rm=2" alt="shirts1"><p>Min 50% off</p></a></div>
                <div class="shirts2"><a href="#"><img src="https://th.bing.com/th?id=OIP.NSURmTi0Wni6q5_p4h1iUwAAAA&w=226&h=276&c=8&rs=1&qlt=90&o=6&dpr=1.6&pid=3.1&rm=2v" alt="shirts2"><p>Min 40% off</p></a></div>
                <div class="shirts3"><a href="#"><img src="https://th.bing.com/th?id=OIP.dRuhkVwX_2O5-vxeotsf0gAAAA&w=219&h=284&c=8&rs=1&qlt=90&o=6&dpr=1.6&pid=3.1&rm=2" alt="shirts3"><p>Special offers</p></a></div>
                <div class="shirts4"><a href="#"><img src="https://th.bing.com/th?id=OIP.hsrk7yDCjJ1JiuPKKhooCgHaHa&w=250&h=250&c=8&rs=1&qlt=90&o=6&dpr=1.6&pid=3.1&rm=2" alt="shirts4"><p>Min 30% off</p></a></div>
              </div>
            </div>
            <div class="content">
              <p>Jeans</p>
              <div class="jeans">
                <div class="jeans1"><a href="#"><img src="https://th.bing.com/th?id=OIP.8NXojcjINPf6uqRRB_aB_wHaKl&w=209&h=298&c=8&rs=1&qlt=90&o=6&dpr=1.6&pid=3.1&rm=20" alt="jeans1"><p>Min 60% off</p></a></div>
                <div class="jeans2"><a href="#"><img src="https://rukminim2.flixcart.com/image/612/612/xif0q/jean/y/1/a/32-black-uc-ollydenims-original-imah3ybdhguywq2b.jpeg?q=70" alt="jeans2"><p>Min 20% off</p></a></div>
                <div class="jeans3"><a href="#"><img src="https://th.bing.com/th?id=OIP.RgZ74Goj_ZP2NrcrSi_S2AHaIv&w=230&h=271&c=8&rs=1&qlt=90&o=6&dpr=1.6&pid=3.1&rm=2" alt="jeans3"><p>Min 30% off</p></a></div>
                <div class="jeans4"><a href="#"><img src="https://th.bing.com/th?id=OIP.zQROvsUQwW4uf4mGwTixjAHaKk&w=209&h=298&c=8&rs=1&qlt=90&o=6&dpr=1.6&pid=3.1&rm=2" alt="jeans4"><p>Special offers</p></a></div>
              </div>
            </div>
            <div class="content">
              <p>T-Shirts</p>
              <div class="tshirts">
                <div class="tshirts1"><a href="#"><img src="https://th.bing.com/th?id=OIP.m62C8-lgStBPsbLAFLD9EgHaKn&w=208&h=299&c=8&rs=1&qlt=90&o=6&dpr=1.6&pid=3.1&rm=2" alt="tshirts1"><p>Min 50% off</p></a></div>
                <div class="tshirts2"><a href="#"><img src="https://th.bing.com/th?id=OIP.Mu25BAaxaUGi2sGWmHq7ZAHaIp&w=231&h=270&c=8&rs=1&qlt=90&o=6&dpr=1.6&pid=3.1&rm=2" alt="tshirts2"><p>Popular</p></a></div>
                <div class="tshirts3"><a href="#"><img src="https://th.bing.com/th/id/OIP.iTtCdo2MWG8Jg93bWoswpwAAAA?w=186&h=248&c=7&r=0&o=5&dpr=1.6&pid=1.7" alt="tshirts3"><p>New collection</p></a></div>
                <div class="tshirts4"><a href="#"><img src="https://th.bing.com/th?id=OIP.y6eTOLJfQ96XKdRKDqu2xgHaJQ&w=223&h=279&c=8&rs=1&qlt=90&o=6&dpr=1.6&pid=3.1&rm=2" alt="tshirts4"><p>Min 40% off</p></a></div>
              </div>
            </div>
            <div class="content">
              <p>Trousers</p>
              <div class="trousers">
                <div class="trousers1"><a href="#"><img src="https://th.bing.com/th?id=OIP.b4TSlFIWFTcZQxItPv2OuwHaJT&w=223&h=280&c=8&rs=1&qlt=90&o=6&dpr=1.6&pid=3.1&rm=2" alt="trousers1"><p>Min 10% off</p></a></div>
                <div class="trousers2"><a href="#"><img src="https://th.bing.com/th?id=OIP.biDd4vRuBH0ycRUEPHdqLwHaJ4&w=216&h=288&c=8&rs=1&qlt=90&o=6&dpr=1.6&pid=3.1&rm=2" alt="trousers2"><p>Get or gone</p></a></div>
                <div class="trousers3"><a href="#"><img src="https://th.bing.com/th/id/OIP.O1H6QrPXEF0W7Bx0wE24iAHaHa?w=186&h=186&c=7&r=0&o=5&dpr=1.6&pid=1.7" alt="trousers3"><p>Min 70% off</p></a></div>
                <div class="trousers4"><a href="#"><img src="https://th.bing.com/th/id/OIP.SW96w3lqBXdnp-7doyc-_AHaLH?w=186&h=279&c=7&r=0&o=5&dpr=1.6&pid=1.7" alt="trousers4"><p>Min 40% off</p></a></div>
             </div>
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
         <a href="home.html"><img src="photos\logo.jpg" alt="Logo"></a>
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
    <script src="app.js"></script>
</body>
</html>
 
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<link rel="stylesheet" type="text/css" href="Style.css" />
<link rel="stylesheet" type="text/css" href="css/bootstrap.css" />
<link rel="stylesheet" type="text/css" href="css/bootstrap-responsive.css" />
<head>
<title>Electro Store -Login</title>
<meta http-equiv="Content-Type" content="text/html; charset=windows-1252" />
<link rel="stylesheet" type="text/css" href="style.css" />
<!--[if IE 6]>
<link rel="stylesheet" type="text/css" href="iecss.css" />
<![endif]-->
<script type="text/javascript" src="js/boxOver.js"></script>
</head>


<body>
<div id="main_container">
  <div class="top_bar">
    <div class="top_search">
      <div class="search_text"><a href="">Advanced Search</a></div>
      <input type="text" class="search_input" name="search" />
      <input type="image" src="images/search.gif" class="search_bt"/>
    </div>
  </div>
  <div id="header">
    <div id="logo"> <a href=""><img src="images/logo.png" alt="" border="0" width="237" height="140" /></a> </div>
    <div class="oferte_content">
      <div class="top_divider"><img src="images/header_divider.png" alt="" width="1" height="164" /></div>
      <div class="oferta">
        <div class="oferta_content"> <img src="images/laptop.png" width="94" height="92" alt="" border="0" class="oferta_img" />
          <div class="oferta_details">
            <div class="oferta_title"></div>
<a href="" class="details">details</a> </div>
        </div>
      </div>
      <div class="top_divider"><img src="images/header_divider.png" alt="" width="1" height="164" /></div>
    </div>
    <!-- end of oferte_content-->
  </div>
  <div id="main_content">
    <div id="menu_tab">
      <div class="left_menu_corner"></div>
      <ul class="menu">
        <li><a href="index.html" class="nav1"> Home</a></li>
        <li class="divider"></li>
        <li><a href="Login.php" class="nav2">Login</a></li>
        <li class="divider"></li>
        <li><a href="signup.php" class="nav4">Sign Up</a></li>
        <li class="divider"></li>
        <li><a href="catalog.php" class="nav4">Catalog</a></li>
        <li class="divider"></li>
        <li></li>
        <li class="divider"></li>
        <li><a href="shipping.php" class="nav5">Shipping</a></li>
        <li class="divider"></li>
        <li><a href="contact.html" class="nav6">Contact Us</a></li>
        <li class="divider"></li>
        <li class="currencies">Currencies
          <select>
            <option>US Dollar</option>
            <option>Euro</option>
          </select>
        </li>
      </ul>
      <div class="right_menu_corner"></div>
    </div>
    <!-- end of menu tab -->
    <div class="crumb_navigation"> Navigation: <a href="index.html">Home</a> &lt; <span class="current">Category name</span> </div>
    <div class="left_content">
      <div class="title_box">Categories</div>
      <ul class="left_menu">
        <li class="odd"><a href="">Processors</a></li>
        <li class="even"><a href="">Motherboards</a></li>
        <li class="odd"><a href="">Desktops</a></li>
        <li class="even"><a href="">Laptops &amp; Notebooks</a></li>
        <li class="odd"><a href="">Hard Drive</a></li>
        <li class="even"><a href="">Web camera</a></li>
        <li class="odd"><a href="">Mouse</a></li>
        <li class="even"><a href="">Keyboard</a></li>
        <li class="odd"><a href="">Fan</a></li>
        <li class="even"><a href="">RAM</a></li>
        <li class="odd"><a href="">Monitor</a></li>
        <li class="even"><a href="">CPU</a></li>
        <li class="odd"></li>
      </ul>
      <div class="title_box">Special Products</div>
      <div class="border_box">
        <div class="product_title">Motorola 156 MX-VL</div>
        <div class="product_img"><a href=""><img src="images/laptop.png" alt="" border="0" /></a></div>
        <div class="prod_price"><span class="reduce">350$</span> <span class="price">270$</span></div>
      </div>
      <div class="banner_adds"></div>
    </div>
    <!-- end of left content -->
    <div class="center_content">
      <div class="center_title_bar">Admin Login</div>
      <div class="prod_box_big">
        <div class="center_prod_box_big">
          <div class="contact_form">
            <div class="form_row">
            <form id="form1" name="form1" method="post" action="">
              <p>
                <label for="radio">User</label>
                <input type="radio" name="radio" id="radio" value="radio" onclick="location.href='Login.php'" /> 
                <span id="form1">
                  <label for="radio2">Admin</label>
                  <input type="radio" name="radio2" id="radio2" value="radio2" />
                </span></p>
              <p>
                <label class="contact"><strong>Admin No:</strong></label>
                <input name="adminNo" type="text" class="contact_input" id="adminNo" />
                
              </p>
              <div class="form_row">
                <label class="contact"><strong>Password:</strong></label>
              <input name="password" type="text" class="contact_input" id="password" onclick="location.href='adminLogin.php'"/>
          </div>
            <div class="form_row">
              <input type="submit" name="submit" id="Submit" value="Login" />
              </div>
              </form>
            </div>
          </div>
        </div>
      </div>
        <div class="bottom_prod_box_big">
       <div class="prod_box_big"></div>
<?php

	$adminNo=$_POST['adminNo'];
	$password=$_POST['password'];
	
	if(!$adminNo||!$password)
	{
		echo "Please enter Admin No and password";	
		exit;
	}
		require("admin.class.php");
		$obj=new admin();
		$value=$obj->check($adminNo,$password);
	
	
?>

             </span></p>
             <p>&nbsp;</p>
        </div>
    </div>
    </div>
    <!-- end of center content -->
    <div class="right_content">
      <div class="shopping_cart">
        <div class="cart_title">Shopping cart</div>
        <div class="cart_details"> 3 items <br />
          <span class="border_cart"></span> Total: <span class="price">350$</span> </div>
        <div class="cart_icon"><a href="" title="header=[Checkout] body=[&nbsp;] fade=[on]"><img src="images/shoppingcart.png" alt="" width="48" height="48" border="0" /></a></div>
      </div>
      <div class="title_box">What’s new</div>
      <div class="border_box">
        <div class="product_title">Motorola 156 MX-VL</div>
        <div class="product_img"><a href=""><img src="images/p2.gif" alt="" border="0" /></a></div>
        <div class="prod_price"><span class="reduce">350$</span> <span class="price">270$</span></div>
      </div>
      <div class="title_box">Manufacturers</div>
      <ul class="left_menu">
        <li class="odd"><a href="sony.php">Sony</a></li>
        <li class="even"><a href="samsung.php">Samsung</a></li>
        <li class="even"><a href="lg.php">LG</a></li>
        <li class="even"><a href="">Apple</a></li>
        <li class="odd"><a href="">Phillips</a></li>
      </ul>
      <div class="banner_adds"> <a href=""><img src="images/bann1.jpg" alt="" border="0" /></a> </div>
    </div>
    <!-- end of right content -->
</div>
  <!-- end of main content -->
  <div class="footer">
    <div class="left_footer"></div>
    <div class="center_footer"><br />
      <img src="images/payment.gif" alt="" /> </div>
    <div class="right_footer"> <a href="index.html">home</a> <a href="">about</a><a href="contact.html">contact us</a> </div>
  </div>
</div>
<!-- end of main_container -->
<div align=center></div>
 </body>

</html>
  

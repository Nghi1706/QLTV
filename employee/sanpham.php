<?php
session_start();
if(isset($_SESSION['log']))
{
	if($_SESSION['log'] != "employee-logged")
	{
		header('location:./index.php');
	}
}
else
{
	header('location:./index.php');
}
if(isset($_REQUEST['id_user']) && isset( $_REQUEST['id_sp']))
?>
<!DOCTYPE html>
<html lang="en">

<head>
  <title>Vegefoods - Free Bootstrap 4 Template by Colorlib</title>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

  <link href="https://fonts.googleapis.com/css?family=Poppins:200,300,400,500,600,700,800&display=swap"
    rel="stylesheet">
  <link href="https://fonts.googleapis.com/css?family=Lora:400,400i,700,700i&display=swap" rel="stylesheet">
  <link href="https://fonts.googleapis.com/css?family=Amatic+SC:400,700&display=swap" rel="stylesheet">
  

  <link rel="stylesheet" href="../css/open-iconic-bootstrap.min.css">
  <link rel="stylesheet" href="../css/animate.css">

  <link rel="stylesheet" href="../css/owl.carousel.min.css">
  <link rel="stylesheet" href="../css/owl.theme.default.min.css">
  <link rel="stylesheet" href="../css/magnific-popup.css">

  <link rel="stylesheet" href="../css/aos.css">

  <link rel="stylesheet" href="../css/ionicons.min.css">

  <link rel="stylesheet" href="../css/bootstrap-datepicker.css">
  <link rel="stylesheet" href="../css/jquery.timepicker.css">


  <link rel="stylesheet" href="../css/flaticon.css">
  <link rel="stylesheet" href="../css/icomoon.css">
  <link rel="stylesheet" href="../css/style.css">
</head>

<body class="goto-here">

<nav class="navbar navbar-expand-lg navbar-dark ftco_navbar bg-dark ftco-navbar-light" id="ftco-navbar">
    <div class="container">
      <a class="navbar-brand" href="gui.php">BookShop</a>
      <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#ftco-nav"
        aria-controls="ftco-nav" aria-expanded="false" aria-label="Toggle navigation">
        <span class="oi oi-menu"></span> Menu
      </button>

      <div class="collapse navbar-collapse" id="ftco-nav">
        <ul class="navbar-nav ml-auto">
          <li class="nav-item active"><a href="gui.php" class="nav-link">Home</a></li>
          <li class="nav-item dropdown">
            <a class="nav-link dropdown-toggle" href="shop.php" id="dropdown04" data-toggle="dropdown"
              aria-haspopup="true" aria-expanded="false">Quản lí</a>
            <div class="dropdown-menu" aria-labelledby="dropdown04">
              <a class="dropdown-item" href="sanpham.php">Sản phẩm</a>
              <a class="dropdown-item" href="khachhang.php">Khách hàng</a>
            </div>
          </li>
          <li class="nav-item"><a href="about.php" class="nav-link">Doanh Thu</a></li>
          <li class="nav-item"><a href="bill.php" class="nav-link">Hoá đơn</a></li>
          <li class="nav-item"><a href="#" class="nav-link">Lương</a></li>
          <li class="nav-item"><a href="#" class="nav-link">Chấm công</a></li>

        </ul>
      </div>
    </div>
  </nav>
    <!-- END nav -->


    <section class="ftco-section ftco-cart">
			<div class="container">
				<div class="row">
    			<div class="col-md-12 ftco-animate">
    				<div class="cart-list">
	    				<table class="table">
                <h2>Danh sách sản phẩm</h2>
						    <thead class="thead-primary">
						      <tr class="text-center">
						        <th>&nbsp;</th>
						        <th>Ảnh sản phẩm</th>
						        <th>Tên sản phẩm</th>
						        <th>giá</th>
						        <th>Nhà cung cấp</th>
                    <th>Số lượng</th>
                    <th></th>
						      </tr>
						    </thead>
						    <tbody>
                <?php
                include('../class.php');
                $p = new user();
                $p->connect();
                $p->QL_sp('select sanpham.id, sanpham.name, sanpham.link_image, sanpham.soluong, ncc.`tên nhà cung cấp`,sanpham.cost from sanpham inner join ncc on sanpham.id_ncc = ncc.id');
                ?>
						  </tbody>
						  </table>
              
					  </div>
    			</div>
        </div>
		</section>
    <section class="ftco-section ftco-cart">
			<div class="container">
				<div class="row">
    			<div class="col-md-12 ftco-animate">
    				<div class="cart-list">
                <h2>Thêm sản phẩm</h2>
						    <form class="col-7" action="add_sp.php" method="get">
                        <div class="mb-3">
                            <label class="form-label">Tên sản phẩm</label>
                            <input type="text" name ="name" id="name"required   class="form-control">
                        </div>
                        <div class="mb-3">
                            <label class="form-label">Giá</label>
                            <input type="number" id="cost" name="cost" required class="form-control">
                        </div>
                        <div class="mb-3">
                            <label class="form-label">Số Lượng</label>
                            <input type="number" id="sl" name="sl" required class="form-control">
                        </div>
                        <div class="mb-3">
                            <label class="form-label">Link ảnh</label>
                            <input type="text" id="link_image" name="link_image" required class="form-control">
                        </div>
                     <input type="submit" value="submit" name="submit" id="submit"  class="btn btn-primary btn-lg" style="padding-left: 2.5rem; padding-right: 2.5rem;"/>

                    </form>
              
					  </div>
    			</div>
        </div>
		</section>
    <footer class="ftco-footer ftco-section">
      <div class="container">
        <div class="row mb-5">
          <div class="col-md">
            <div class="ftco-footer-widget mb-4">
              <h2 class="ftco-heading-2">Bookshop</h2>
              <p>xa tận chân trời gần ngay trước mắt</p>
              <ul class="ftco-footer-social list-unstyled float-md-left float-lft mt-5">
                <li class="ftco-animate"><a href="#"><span class="icon-twitter"></span></a></li>
                <li class="ftco-animate"><a href="#"><span class="icon-facebook"></span></a></li>
                <li class="ftco-animate"><a href="#"><span class="icon-instagram"></span></a></li>
              </ul>
            </div>
          </div>
          <div class="col-md">
            <div class="ftco-footer-widget mb-4 ml-md-5">
              <h2 class="ftco-heading-2">Menu</h2>
              <ul class="list-unstyled">
                <li><a href="#" class="py-2 d-block">Shop</a></li>
                <li><a href="#" class="py-2 d-block">About</a></li>
                <li><a href="#" class="py-2 d-block">Journal</a></li>
                <li><a href="#" class="py-2 d-block">Contact Us</a></li>
              </ul>
            </div>
          </div>
          <div class="col-md-4">
             <div class="ftco-footer-widget mb-4">
              <h2 class="ftco-heading-2">Help</h2>
              <div class="d-flex">
	              <ul class="list-unstyled mr-l-5 pr-l-3 mr-4">
	                <li><a href="#" class="py-2 d-block">Shipping Information</a></li>
	                <li><a href="#" class="py-2 d-block">Returns &amp; Exchange</a></li>
	                <li><a href="#" class="py-2 d-block">Terms &amp; Conditions</a></li>
	                <li><a href="#" class="py-2 d-block">Privacy Policy</a></li>
	              </ul>
	              <ul class="list-unstyled">
	                <li><a href="#" class="py-2 d-block">FAQs</a></li>
	                <li><a href="#" class="py-2 d-block">Contact</a></li>
	              </ul>
	            </div>
            </div>
          </div>
          <div class="col-md">
            <div class="ftco-footer-widget mb-4">
            	<h2 class="ftco-heading-2">Have a Questions?</h2>
            	<div class="block-23 mb-3">
	              <ul>
	                <li><span class="icon icon-map-marker"></span><span class="text">203 address</span></li>
	                <li><a href="#"><span class="icon icon-phone"></span><span class="text">+84 966 862 xxx</span></a></li>
	                <li><a href="#"><span class="icon icon-envelope"></span><span class="text">myteam@email.com</span></a></li>
	              </ul>
	            </div>
            </div>
          </div>
        </div>
        <div class="row">
          <div class="col-md-12 text-center">
          </div>
        </div>
      </div>
    </footer>
    
  

  <!-- loader -->
  <div id="ftco-loader" class="show fullscreen"><svg class="circular" width="48px" height="48px"><circle class="path-bg" cx="24" cy="24" r="22" fill="none" stroke-width="4" stroke="#eeeeee"/><circle class="path" cx="24" cy="24" r="22" fill="none" stroke-width="4" stroke-miterlimit="10" stroke="#F96D00"/></svg></div>


  <script src="../js/jquery.min.js"></script>
  <script src="../js/jquery-migrate-3.0.1.min.js"></script>
  <script src="../js/popper.min.js"></script>
  <script src="../js/bootstrap.min.js"></script>
  <script src="../js/jquery.easing.1.3.js"></script>
  <script src="../js/jquery.waypoints.min.js"></script>
  <script src="../js/jquery.stellar.min.js"></script>
  <script src="../js/owl.carousel.min.js"></script>
  <script src="../js/jquery.magnific-popup.min.js"></script>
  <script src="../js/aos.js"></script>
  <script src="../js/jquery.animateNumber.min.js"></script>
  <script src="../js/bootstrap-datepicker.js"></script>
  <script src="../js/scrollax.min.js"></script>
  <script src="https://maps.googleapis.com/maps/api/js?key=AIzaSyBVWaKrjvy3MaE7SQ74_uJiULgl1JY0H2s&sensor=false"></script>
  <script src="../js/google-map.js"></script>
  <script src="../js/main.js"></script>
    
  </body>
</html>
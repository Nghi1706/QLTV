<?php
session_start();
include('../class.php');
$p = new user();
$p->connect();
$phone = $_SESSION['phone'];
echo($phone);
$p-> cart_sp("select sanpham.name, sanpham.cost, sanpham.link_image from cart inner join guest_login on cart.id_user = guest_login.phone inner join sanpham on cart.id_sp = sanpham.id where id_user='$phone'");
?>
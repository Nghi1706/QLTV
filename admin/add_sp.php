<?php
session_start();
if(isset($_SESSION['log']))
{
	if($_SESSION['log'] != "admin-logged")
	{
		header('location:./index.php');
	}
}
else
{
	header('location:./index.php');
}
if(isset( $_GET['name']) && isset( $_GET['cost']) && isset( $_GET['sl']) && isset( $_GET['link_image']))
{
include('../class.php');
 $p = new user();
$p->connect();
$name=$_GET['name'];
$cost = $_GET['cost'];
$sl = $_GET['sl'];
$id= rand(1,3);
$img = $_GET['link_image'];
if($p->edit("INSERT INTO sanpham( name, soluong, id_ncc, cost, link_image) VALUES ('$name','$sl',$id,'$cost','$img');")==0){
    echo 'dail';
}
}
?>
<script>
    window.history.back();
</script>

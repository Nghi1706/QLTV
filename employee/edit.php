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
if(isset($_GET['id']) && isset( $_GET['name']) && isset( $_GET['cost']) && isset( $_GET['sl']))
{$id = $_GET['id'];
include('../class.php');
 $p = new user();
$p->connect();
$id=$_GET['id'];
$name=$_GET['name'];
$cost = $_GET['cost'];
$sl = $_GET['sl'];
$p->edit("UPDATE sanpham SET name='$name', cost='$cost', soluong='$sl' where id=$id");
}
?>
<script>
    window.history.back();
</script>

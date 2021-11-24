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
if(isset($_GET['id']) && isset( $_GET['name']) && isset( $_GET['address']) && isset( $_GET['sl']))
{
include('../class.php');
 $p = new user();
$p->connect();
$id=$_GET['id'];
$name=$_GET['name'];
$cost = $_GET['address'];
$sl = $_GET['sl'];
$p->edit("UPDATE guest_login SET name='$name', address='$cost', password='$sl' where phone=$id");
}
?>
<script>
    window.history.back();
</script>

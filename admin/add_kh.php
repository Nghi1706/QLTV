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
if(isset( $_GET['name']) && isset( $_GET['sdt']) && isset( $_GET['address']) && isset( $_GET['password']))
{
include('../class.php');
 $p = new user();
$p->connect();
$name= $_GET['name'];
$phone = $_GET['sdt'];
$add = $_GET['address'];
$pass = $_GET['password'];
if($p->edit("INSERT INTO guest_login (phone, name, address, password) VALUES ($phone, '$name', '$add', $pass);")==0){
    echo 'dail';
}
}
?>
<script>
    window.history.back();
</script>


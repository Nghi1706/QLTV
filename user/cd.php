<?php
session_start();
if(isset($_SESSION['log']))
{
	if($_SESSION['log'] != "user-logged")
	{
		header('location:./index.php');
	}
}
else
{
	header('location:./index.php');
}
if(isset($_REQUEST['id_user']) && isset( $_REQUEST['id_sp']))
{$id_user = $_REQUEST['id_user'];
$id_sp = $_REQUEST['id_sp'];
include('../class.php');

$date = date("Y-m-d");
$p = new user();
$p->connect();
$p-> edit("INSERT INTO cart (id_user, id_sp, id, date) VALUES ('$id_user', '$id_sp', NULL,'$date');");}
?>
<script>
    window.history.back();
</script>
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
if(isset($_REQUEST['id_user']) && isset( $_REQUEST['id_sp']))
{$id_user = $_REQUEST['id_user'];
$id_sp = $_REQUEST['id_sp'];
include('../class.php');
$p = new user();
$p->connect();
$p-> edit("INSERT INTO cart (id_user, id_sp, id) VALUES ('$id_user', '$id_sp', NULL);");}
?>
<script>
    window.history.back();
</script>
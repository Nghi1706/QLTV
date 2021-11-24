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
if(isset($_REQUEST['id']) && isset( $_REQUEST['del']))
{$id = $_REQUEST['id'];
$del = $_REQUEST['del'];
$phone = $_SESSION['phone'];
include('../class.php');
$p = new user();
$p->connect();
$p-> edit("delete from $del where id_user=$phone and id_sp=$id ;");}
?>
<script>
    window.history.back();
</script>
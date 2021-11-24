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
if(isset($_REQUEST['id']) && isset( $_REQUEST['del']))
{$id = $_REQUEST['id'];
$del = $_REQUEST['del'];
include('../class.php');
$p = new user();
$p->connect();
$p-> edit("delete from $del where id=$id ;");
$p-> edit("delete from $del where phone=$id ;");}

?>
<script>
    window.history.back();
</script>
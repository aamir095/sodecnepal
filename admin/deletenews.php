<?php 

include '../config/call.php';
$userId = $_GET['ref'];
if(checkAdminLogin())
{
if(deleteProgram($conn,$userId)){
	showmsg('News Deleted Successfully','success');
	redirection('managenews.php');
}
}
?>
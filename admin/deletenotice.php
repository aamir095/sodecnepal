<?php 

include '../config/call.php';
$userId = $_GET['ref'];
if(checkAdminLogin())
{
if(deleteNotice($conn,$userId)){
	showmsg('Notice Deleted Successfully','success');
	redirection('managenotices.php');
}
}
?>
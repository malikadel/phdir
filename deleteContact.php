<?php 
include_once('settings.php');
if(isset($_GET['cid']) and (int)$_GET['cid'] > 0)
{
	$cid = $_GET['cid'];
	if(authorityTestForContact())
	{
		if(deleteContact($cid))
		{
			$message = "Successfully Deleted.";
		}
		else
		{
			$message = "Not Deleted.";
		}
	}
	else
	{
		$message = "You are not authorised to do this activity";
	}
}
else
{
		$message = "You are not authorised to do this activity";
}
		header('Location: http://localhost/phdir/index.php?message='.$message.'#directory-private');
?>
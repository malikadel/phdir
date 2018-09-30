<?php 
include_once('settings.php');

if(isset($_POST['cid']) and (int)$_POST['cid'] > 0)
{
	$cid = $_POST['cid'];
	if(authorityTestForContact($cid))
	{
		$access = isset($_POST['access'])?$_POST['access']:'1';
		if(updateContact(array('cid'=>$cid,'name'=>$_POST['name'],'email'=>$_POST['email'],'access'=>$access,'pnumber'=>$_POST['pnumber'])))
		{



			$message = "Contact and phone are updated.";
			header('Location: http://localhost/phdir/index.php?message='.$message.'#directory-private');			 			
		}
		else
		{
			$message = "You are not authorised to do this activity";
			header('Location: http://localhost/phdir/index.php?message='.$message.'#directory-private');			 
		}
	}
	else
	{
		$message = "You are not authorised to do this activity";
		header('Location: http://localhost/phdir/index.php?message='.$message.'#directory-private');
	}
}
else
{
		$message = "You are not authorised to do this activity";
		header('Location: http://localhost/phdir/index.php?message='.$message.'#directory-private');
}

?>
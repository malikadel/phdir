<?php 
session_start();	
error_reporting(E_ALL);
error_reporting(-1);
ini_set('error_reporting', E_ALL);

include_once("lib/database/connection.php");

$user = getUser();


if(isset($_SERVER['REQUEST_METHOD']) and strtoupper($_SERVER['REQUEST_METHOD']) == "POST")
{
	if(DB_AVAILABLE == 1 and isset($PDOC))
	{
		$name = filter_input(INPUT_POST, 'name', FILTER_SANITIZE_STRING); 
		$cemail = filter_input(INPUT_POST, 'email', FILTER_SANITIZE_EMAIL);  

		if($name != '')
		{

			try 
			{

			    $sql = "INSERT INTO contacts (name, email,user_id) VALUES (?,?,?)";
				$stmt = $PDOC->prepare($sql);
				if (!$stmt) 
				{
				    echo '<p> Sorry Something went wrong.Please try again.<a href="http://localhost/phdir#services">Go Back</a></p>';
				    return ;
				}

				$ret  = $stmt->execute(array($name,$cemail,$user['id']));
				if($ret == 1)
				{

					$cid = $PDOC->lastInsertId();
					$phone = filter_input(INPUT_POST, 'phone', FILTER_SANITIZE_STRING); 
					$pub = isset($_POST['pub'])?(string)$_POST['pub']:'1'; 
				    $sql = "INSERT INTO phones (contact_id,pnumber,access) VALUES (?,?,?)";
					$stmt = $PDOC->prepare($sql);
					$ret  = $stmt->execute(array($cid,$phone,$pub));
					header("Location: http://localhost/phdir#contact");
				}
				else
				{
					echo '<p> Email or Password mismatching.<a href="http://localhost/phdir#services">Go Back</a></p>';
				}
				//include('sessions.php');
				//header("Location: http://localhost/phdir");

		    }
			catch(PDOException $e)
		    {

			     echo '<p>'.$e->getMessage().'<a href="http://localhost/phdir#services">Go Back</a></p>';
		    }
		}
		else
		{
			echo '<p> Name should be added.<a href="http://localhost/phdir#services">Go Back</a>"</p>';
		}


	}
	else
	{
		echo '<p> Sorry Something went wrong.Please try again.<a href="http://localhost/phdir#services">Go Back</a>"</p>';
	}
}
else
{
	header("Location: http://localhost/phdir");
}

?>
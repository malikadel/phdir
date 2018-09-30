<?php 
include_once("settings.php");

if(isset($_SERVER['REQUEST_METHOD']) and strtoupper($_SERVER['REQUEST_METHOD']) == "POST")
{
	if(DB_AVAILABLE == 1 and isset($PDOC))
	{
		$email = filter_input(INPUT_POST, 'email', FILTER_SANITIZE_EMAIL); 

		$password = filter_input(INPUT_POST, 'password', FILTER_SANITIZE_STRING); 

		if($email != '' and $password != '')
		{

			try 
			{


				$password = md5($password);
			    $sql = "SELECT * FROM users where email=? and password = ? limit 0,1";
				$stmt = $PDOC->prepare($sql);
				if (!$stmt) 
				{
				    echo '<p> Sorry Something went wrong.Please try again.<a href="http://localhost/phdir#services">Go Back</a></p>';
				}

				$ret  = $stmt->execute(array($email,$password));
				if($ret == 1)
				{
					include_once('sessions.php');
					header("Location: http://localhost/phdir");
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
			echo '<p> Name,Email and Password are required for signup.<a href="http://localhost/phdir#services">Go Back</a>"</p>';
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
<?php 
include_once("settings.php");
if(isset($_SERVER['REQUEST_METHOD']) and strtoupper($_SERVER['REQUEST_METHOD']) == "POST")
{
	if(DB_AVAILABLE == 1 and isset($PDOC))
	{

		$name = filter_input(INPUT_POST, 'name', FILTER_SANITIZE_STRING);
		 
		$email = filter_input(INPUT_POST, 'email', FILTER_SANITIZE_EMAIL); 

		$password = filter_input(INPUT_POST, 'password', FILTER_SANITIZE_STRING); 

		if($name != '' and preg_match('$[\w-\.]+@([\w-]+\.)+[\w-]{2,4}$', $email) == 1 and $password != '')
		{

			try 
			{


				$password = md5($password);
			    $sql = "INSERT INTO users (name, email, password) VALUES (?,?,?)";
				$stmt = $PDOC->prepare($sql);
				if (!$stmt) 
				{
				    echo '<p> Sorry Something went wrong.Please try again.<a href="http://localhost/phdir#services">Go Back</a></p>';
				}

				$stmt->execute(array($name,$email,$password));
				include_once('sessions.php');
				header("Location: http://localhost/phdir");

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
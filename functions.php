<?php 
if(!function_exists('getUser'))
{
	function getUser()
	{

		if(isset($_SESSION['email']) and $_SESSION['email'] != '')
		{
			global $PDOC;
			$email = $_SESSION['email'];
		    $sql = "SELECT id,name,email FROM users where email=? limit 0,1";
			$stmt = $PDOC->prepare($sql);
			if (!$stmt) 
			{
				return null;
			}
			$ret  = $stmt->execute(array($email));
			if($ret == 1)
			{
				
				$user = $stmt->fetchAll(PDO::FETCH_ASSOC);


				if(count($user) > 0)
					return $user[0];
				else
					return null;
			}
		}
		else
		{
			return null;
		}
	}
}
if(!function_exists('publicPhones'))
{
	function publicPhones()
	{

		global $PDOC,$phoneNumbers;
		
	    $sql = "SELECT c.name,c.email,p.pnumber FROM contacts as c Inner Join 
	    phones as p on c.id = p.contact_id where p.access ='0'";
		$stmt = $PDOC->prepare($sql);
		if (!$stmt) 
		{
			return null;
		}
		$ret  = $stmt->execute();
		if($ret == 1)
		{
			$phoneNumbers = $stmt->fetchAll(PDO::FETCH_ASSOC);
		}
	}
}
if(!function_exists('privatePhones'))
{
	function privatePhones()
	{
		if(isset($_SESSION['email']) and $_SESSION['email'] != '')
		{
			global $PDOC,$privateNumbers;
			$current_user = getUser();
		    $sql = "SELECT c.name,c.email,p.pnumber,c.id FROM contacts as c Inner Join 
		    phones as p on c.id = p.contact_id where c.user_id = ?";
			$stmt = $PDOC->prepare($sql);
			if (!$stmt) 
			{
				return null;
			}
			$ret  = $stmt->execute(array($current_user['id']));
			if($ret == 1)
			{
				$privateNumbers = $stmt->fetchAll(PDO::FETCH_ASSOC);
			}
		}
	}
}
if(!function_exists('authorityTestForContact'))
{
	function authorityTestForContact($cid = 0)
	{
		if(isset($_SESSION['email']) and $_SESSION['email'] != '')
		{
			global $PDOC;
			$current_user = getUser();
		    $sql = "SELECT c.id FROM contacts as c Inner Join 
		    users as u on u.id = c.user_id where c.id = ?";
			$stmt = $PDOC->prepare($sql);
			if (!$stmt) 
			{return false;}
			$ret  = $stmt->execute(array($cid));
			if($ret == 1)
			{
				return true;
			}
		}
		else
		{
			return false;
		}
	}
}
if(!function_exists('authorityTestForPhone'))
{
	function authorityTestForPhone($pid = 0)
	{
		if(isset($_SESSION['email']) and $_SESSION['email'] != '')
		{
			global $PDOC;
			$current_user = getUser();
		    $sql = "SELECT c.name,c.email,p.pnumber,c.id FROM contacts as c Inner Join 
		    phones as p on c.id = p.contact_id where c.user_id = ?";
			$stmt = $PDOC->prepare($sql);
			if (!$stmt) 
			{
				return null;
			}
			$ret  = $stmt->execute(array($current_user['id']));
			if($ret == 1)
			{
				$privateNumbers = $stmt->fetchAll(PDO::FETCH_ASSOC);
			}
		}
		else
		{
			return false;
		}
	}
}

if(!function_exists('deleteContact'))
{
	function deleteContact($cid = 0)
	{
		global $PDOC;
		$current_user = getUser();
	    $sql = "DELETE FROM contacts where id = ?";
		$stmt = $PDOC->prepare($sql);
		if (!$stmt) 
		{
			return null;
		}
		$ret  = $stmt->execute(array($cid));
		if($ret == 1)
		{
			return true;
		}
		else
		{
			return false;
		}
	}
}
if(!function_exists('fetchContact'))
{
	function fetchContact($cid = 0)
	{
		global $PDOC;
	    $sql = "SELECT * FROM contacts where id = ?";
		$sql = "SELECT c.name,c.email,p.pnumber,c.id,p.access FROM contacts as c Inner Join 
		    phones as p on c.id = p.contact_id where c.id = ?";
		$stmt = $PDOC->prepare($sql);
		if (!$stmt) 
		{
			return null;
		}
		$ret  = $stmt->execute(array($cid));
		if($ret == 1)
		{
			$contacts = $stmt->fetchAll(PDO::FETCH_ASSOC);
			if(count($contacts) > 0)
			return $contacts[0];
			else
			return false;
		}
		else
		{
			return false;
		}
	}
}
if(!function_exists("updateContact"))
{
	function updateContact($contact = array())
	{
		if(count($contact)>0 and isset($contact['cid']) and $contact['cid'] > 0)
		{

			global $PDOC;
		    $sql = "UPDATE contacts  SET name = ?, email= ? where id = ?";
			$stmt = $PDOC->prepare($sql);
			if (!$stmt) 
			{
				return false;
			}
			$ret  = $stmt->execute(array($contact['name'],$contact['email'],$contact['cid']));
			if($ret == 1)
			{

				$sql2 = "UPDATE phones  SET pnumber = ?, access= ? where contact_id = ?";
				$stmt = $PDOC->prepare($sql2);
				if (!$stmt) 
				{
					return false;
				}
				$ret1  = $stmt->execute(array($contact['pnumber'],$contact['access'],$contact['cid']));
				if($ret1 == 1)
				{
					return true;
				}
				else
				{
					return false;
				}
			}
			else
			{
				return false;
			}
		}
		else
		{
			return false;
		}

	}
}
?>
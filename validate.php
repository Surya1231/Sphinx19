<?php 
function test_input($data)
{
  $data = trim($data);
  $data = stripslashes($data);
  $data = htmlspecialchars($data);
  return $data;
}

function validate_name($data)
{
	if (empty($data))
    {
		return false;
	}
  	else
    {
    	$name = test_input($data);
    	if (preg_match("/^[a-zA-Z0-9?. .-]+$]*$/",$name))
      	{
      		return true; 
      	}
	 	else
		{
	 		return false;
		}
    }
}
function validate_user_name($data)
{
	if (empty($data))
    {
		return false;
	}
  	else
    {
    	$name = test_input($data);
    	if (preg_match("/^[a-zA-Z][a-zA-Z\\s]+$/",$name))
      	{
      		return true; 
      	}
	 	else
		{
	 		return false;
		}
    }
}

function validate_email($data)
{
	if (empty($data))
    {
		return false;
	}
  	else
    {
    	$email = test_input($data);
    	if (preg_match("/([\w\-]+\@[\w\-]+\.[\w\-]+)/",$email))
      	{
      		return true; 
      	}
	 	else
		{
	 		return false;
		}
    }
}
function validate_url($data)
{
	if (empty($data))
    {
		return false;
	}
  	else
    {
    	$url = test_input($data);
    	if (preg_match("/\b(?:(?:https?|ftp):\/\/|www\.)[-a-z0-9+&@#\/%?=~_|!:,.;]*[-a-z0-9+&@#\/%=~_|]/i",$url))
      	{
      		return true; 
      	}
	 	else
		{
	 		return false;
		}
    }
}
function validate_phone($data)
{
	if (empty($data))
    {
		return false;
	}
  	else
    {
    	$phone = test_input($data);
    	if (preg_match("/^[1-9]{1}[0-9]{9}$/",$phone))
      	{
      		return true; 
      	}
	 	else
		{
	 		return false;
		}
    }
}

?>
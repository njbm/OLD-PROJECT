<a href="account.php?page=account" style="">Edit Profile</a>


<?php
	if(isset($_GET["page"]))
	{
	switch($_GET["page"])
		{
		case "account":
			{
				include("account.php");
			}
		break;
				
		case "view":
			{
				include("viewaccount.php");
			}
		}	
	}
	else
	{
	include("account.php");
	}
?>
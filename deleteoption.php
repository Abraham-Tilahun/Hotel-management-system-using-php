<?php
				  if (isset($_POST['yes']))
	{
			$con = mysql_connect("localhost", "root", "root");
			if (!$con)
			  {
			  die('Could not connect: ' . mysql_error());
			  }
			
			mysql_select_db("newyegof", $con);
			$messages_id = $_POST['room_no'];
			//$result = mysql_query("SELECT * FROM friendlist WHERE friends_id = $member_id");
			mysql_query("DELETE FROM rooms WHERE room_no='$messages_id'");
			Header("location:?msg=wrg");
			exit();
			
			mysql_close($con);
			}
			 if (isset($_POST['no']))
	{
			
			Header("location:?msg=wrg");

			exit();
		
			}
			?>
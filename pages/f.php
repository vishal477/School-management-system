function promteClass($class)
{

	$db = Database::getInstance();
	$mysqli = $db->getConnection();
	if($class == '1st')
		{
			$query = "UPDATE studentregister SET class = '2nd' WHERE class = ?";
				$stmt= $mysqli->prepare($query);
				$stmt->bind_param('s',$class);
				$stmt->execute();
				
				if(false===$stmt)
				{
					trigger_error("Error in query: " . mysqli_connect_error(),E_USER_ERROR);
				}
				else
				{
					echo '<script language = "Javascript">';
					echo 'alert("Promoted Successfully");
					location.href="promote_class.php"';
					echo "</script>";
				}
	    
		}
		elseif ($class == '2nd') 
		{
			$query = "UPDATE studentregister SET class = '3rd' WHERE class = ?";
				$stmt= $mysqli->prepare($query);
				$stmt->bind_param('s',$class);
				$stmt->execute();

				if(false===$stmt)
				{
					trigger_error("Error in query: " . mysqli_connect_error(),E_USER_ERROR);
				}
				else
				{
					echo '<script language = "Javascript">';
					echo 'alert("Promoted Successfully");
					location.href="promote_class.php"';
					echo "</script>";
				}
			
		}
		elseif ($class == '3rd') 
		{
			$query = "UPDATE studentregister SET class = '4th' WHERE class = ?";
				$stmt= $mysqli->prepare($query);
				$stmt->bind_param('s',$class);
				$stmt->execute();

				if(false===$stmt)
				{
					trigger_error("Error in query: " . mysqli_connect_error(),E_USER_ERROR);
				}
				else
				{
					echo '<script language = "Javascript">';
					echo 'alert("Promoted Successfully");
					location.href="promote_class.php"';
					echo "</script>";
				}
			
		}
		elseif ($class == '4th') 
		{
			$query = "UPDATE studentregister SET class = '5th' WHERE class = ?";
				$stmt= $mysqli->prepare($query);
				$stmt->bind_param('s',$class);
				$stmt->execute();

				if(false===$stmt)
				{
					trigger_error("Error in query: " . mysqli_connect_error(),E_USER_ERROR);
				}
				else
				{
					echo '<script language = "Javascript">';
					echo 'alert("Promoted Successfully");
					location.href="promote_class.php"';
					echo "</script>";
				}
			
		}
		elseif ($class == '5th') 
		{
			$query = "UPDATE studentregister SET class = '6th' WHERE class = ?";
				$stmt= $mysqli->prepare($query);
				$stmt->bind_param('s',$class);
				$stmt->execute();

				if(false===$stmt)
				{
					trigger_error("Error in query: " . mysqli_connect_error(),E_USER_ERROR);
				}
				else
				{
					echo '<script language = "Javascript">';
					echo 'alert("Promoted Successfully");
					location.href="promote_class.php"';
					echo "</script>";
				}
			
		}
		elseif ($class == '6th') 
		{
			$query = "UPDATE studentregister SET class = '7th' WHERE class = ?";
				$stmt= $mysqli->prepare($query);
				$stmt->bind_param('s',$class);
				$stmt->execute();

				if(false===$stmt)
				{
					trigger_error("Error in query: " . mysqli_connect_error(),E_USER_ERROR);
				}
				else
				{
					echo '<script language = "Javascript">';
					echo 'alert("Promoted Successfully");
					location.href="promote_class.php"';
					echo "</script>";
				}
			
		}
		elseif ($class == '7th') 
		{
			$query = "UPDATE studentregister SET class = '8th' WHERE class = ?";
				$stmt= $mysqli->prepare($query);
				$stmt->bind_param('s',$class);
				$stmt->execute();

				if(false===$stmt)
				{
					trigger_error("Error in query: " . mysqli_connect_error(),E_USER_ERROR);
				}
				else
				{
					echo '<script language = "Javascript">';
					echo 'alert("Promoted Successfully");
					location.href="promote_class.php"';
					echo "</script>";
				}
			
		}
		elseif ($class == '8th') 
		{
			$query = "UPDATE studentregister SET class = '9th' WHERE class = ?";
				$stmt= $mysqli->prepare($query);
				$stmt->bind_param('s',$class);
				$stmt->execute();

				if(false===$stmt)
				{
					trigger_error("Error in query: " . mysqli_connect_error(),E_USER_ERROR);
				}
				else
				{
					echo '<script language = "Javascript">';
					echo 'alert("Promoted Successfully");
					location.href="promote_class.php"';
					echo "</script>";
				}
			
		}
		elseif ($class == '9th') 
		{
			$query1 = "SELECT FROM studentregister WHERE class = '$class'";
			$stmt= $mysqli->query($query);
			if ($stmt->num_rows > 0) 
			{
				echo "<script>alert('No Data Present')</script>";
			}
			$query = "UPDATE studentregister SET class = '10th' WHERE class = ?";
				$stmt= $mysqli->prepare($query);
				$stmt->bind_param('s',$class);
				$stmt->execute();

				if(false===$stmt)
				{
					trigger_error("Error in query: " . mysqli_connect_error(),E_USER_ERROR);
				}
				else
				{
					echo '<script language = "Javascript">';
					echo 'alert("Promoted Successfully");
					location.href="promote_class.php"';
					echo "</script>";
				}
			
		}
		elseif ($class == '10th') 
		{
			$query = "UPDATE studentregister SET class = '11th' WHERE class = ?";
				$stmt= $mysqli->prepare($query);
				$stmt->bind_param('s',$class);
				$stmt->execute();

				if(false===$stmt)
				{
					trigger_error("Error in query: " . mysqli_connect_error(),E_USER_ERROR);
				}
				else
				{
					echo '<script language = "Javascript">';
					echo 'alert("Promoted Successfully");
					location.href="promote_class.php"';
					echo "</script>";
				}
			
		}
		elseif ($class == '11th') 
		{
			$query = "UPDATE studentregister SET class = '12th' WHERE class = ?";
				$stmt= $mysqli->prepare($query);
				$stmt->bind_param('s',$class);
				$stmt->execute();

				if(false===$stmt)
				{
					trigger_error("Error in query: " . mysqli_connect_error(),E_USER_ERROR);
				}
				else
				{
					echo '<script language = "Javascript">';
					echo 'alert("Promoted Successfully");
					location.href="promote_class.php"';
					echo "</script>";
				}
			
		}
		elseif ($class == '12th') 
		{
			echo '<script language = "Javascript">';
			echo 'alert("Selected class can not be promoted further...");
					location.href="promote.php"';
			echo "</script>";
			
		}

}
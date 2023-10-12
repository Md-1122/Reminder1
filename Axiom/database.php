<?php
	class connectionMNGR
	{
		public function connect()
		{
			$dbConn = mysqli_connect("localhost", "root","") or die ('MySQL connection failed. . . ' . mysqli_error());
			$db = mysqli_select_db('reminder', $dbConn) or die('Cannot select database. . . ' . mysqli_error());
		}
	}

	class SQL
	{
			function dbQuery($sql)
			{
				$result = mysqli_query($sql) or die(mysqli_error());
				
				return $result;
			}
			
			function dbFetchAssoc($result)
			{
				return mysqli_fetch_assoc($result);
			}
						
			function dbFreeResult($result)
			{
				return mysqli_free_result($result);
			}
			
			function dbNumRows($result)
			{
				return mysqli_num_rows($result);
			}
			
			
			
	}		
?>
<?php
	$con = mysql_connect('localhost', 'root', '@l1I2N3K4S5');
	$db = mysql_select_db('User');
	
  		$query = mysql_query("Selecr * From create_user");
  		$num_rows = mysql_num_rows($query);

  		echo $num_rows;
  	?>
  </body>
<?php 	

function lst(){

include('db_con.php');

	$data = $db->query('select user_name, phone,grp from users', PDO::FETCH_ASSOC);
	$cnv_dta= $data->fetchAll();

		echo "<table style='border:1px grey solid'>
			     	<tr>
			     	<td style='border:1px grey solid'>Name</td>
			     	<td style='border:1px grey solid'>Phone</td>
			     	<td style='border:1px grey solid'>Group</td>
			     	</tr>";
	foreach ($cnv_dta as $row) {

		echo "<tr>
					<td style='border:1px grey solid'>".$row['user_name']."</td>
					<td style='border:1px grey solid'>".$row['phone']."</td>
					<td style='border:1px grey solid'>".$row['grp']."</td>
			  </tr>";		  
	}
		echo "</table>";

}
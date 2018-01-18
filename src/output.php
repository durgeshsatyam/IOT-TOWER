<?php
error_reporting(E_ALL); ini_set('display_errors', 1);
require_once("class.DB.php");
//change the database name accordingly
$db = new db();

$user=$db->select("tower_data","1 order by data_time desc limit 10");
//var_dump($user);
echo json_encode($user);
if(!empty($user))
{
	foreach ($user as $key1) {
		foreach($key1 as $key=>$value)
		{
			//echo "$key => $value<br>";
			
		}
	}
	
	
	
}
else{
	echo "no data found";
}
?>

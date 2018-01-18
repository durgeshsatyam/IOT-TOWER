<?php
error_reporting(E_ALL); ini_set('display_errors', 1);

require_once("class.DB.php");
//change the database name accordingly
$db = new db();
$input_arr=array();

if(!empty($_GET["id"])&&!empty($_GET["key"]))
{
	
	if($_GET["id"]!="Durgesh Satyam"||$_GET["key"]!="mittal sir")
	{
		echo"wrong credentials";
		exit;
	}
	else
	{
		if(empty($_GET["x"]))
			$_GET["x"]=rand(0,1023);
		if(empty($_GET["y"]))
			$_GET["y"]=rand(0,1023);
		if(empty($_GET["z"]))
			$_GET["z"]=rand(0,1023);

		if(empty($_GET["b_x"]))
			$_GET["b_x"]=rand(0,1023);
		if(empty($_GET["b_y"]))
			$_GET["b_y"]=rand(0,1023);
		if(empty($_GET["b_z"]))
			$_GET["b_z"]=rand(0,1023);

		$input_arr["x"]=$_GET["x"];
		$input_arr["y"]=$_GET["y"];
		$input_arr["z"]=$_GET["z"];

		$input_arr["b_x"]=$_GET["b_x"];
		$input_arr["b_y"]=$_GET["b_y"];
		$input_arr["b_z"]=$_GET["b_z"];
		//var_dump($input_arr);
		if($db->insert("tower_data",$input_arr))
		{
			echo '<html>
			<meta http-equiv="refresh" content="2">
			';
			echo "data successfully saved</html>";

		}
		else
			echo "problem in data or server";

	}
}
else
{
	echo"wrong credentials";
	exit;
}

?>
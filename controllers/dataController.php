<?php
require('../classes/data.php');




//gets the qualification list
if (isset($_GET['qualification']) & !empty($_GET['qualification'])) 
{
	$sql="SELECT * FROM qualification";
	getData($sql,"qualification");
}
//gets the units list
elseif (isset($_GET['unit']) & !empty($_GET['unit'])) 
{
	$sql="SELECT * FROM unit";
	getData($sql,"unit");
}
//gets the regions list
elseif (isset($_GET['region']) & !empty($_GET['region'])) 
{
	$sql="SELECT * FROM region";
	getData($sql,"region");
}
//gets the other sections list
elseif (isset($_GET['other_section']) & !empty($_GET['other_section'])) 
{
	$sql="SELECT * FROM other_section";
	getData($sql,"other_section");
}
//gets the user role list
elseif (isset($_GET['role']) & !empty($_GET['role'])) 
{
	$sql="SELECT * FROM role";
	getData($sql,"role");
}

//get data
function getData($sql,$name)
{
	$data = new Data;

	//returns a json encode of the result set
	$result = $data->getData($sql,$name);
	echo $result;
}

?>
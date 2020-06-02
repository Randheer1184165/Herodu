<?php

$db['db_host']="us-cdbr-east-05.cleardb.net:3306";
$db['db_user']="ba5b503b7c7358";
$db['db_pass']="c86e86ba";
$db['db_name']="heroku_597cf2e5c9cb274";

foreach ($db as $key => $value) {

define(strtoupper($key), $value);

}



$connection =mysqli_connect(DB_HOST, DB_USER,DB_PASS,DB_NAME);

/*if ($connection) {

echo "we are connected";
	
}else{

	die(" we are sorry");
	
}*/

?>
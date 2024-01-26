 <?php
define("SERVER","localhost");
define("PASSWORD","");
define("USERNAME","root");
define("DB","project_thesis");
define("SITE_URL","http://localhost/project&thesis/");
$connection = mysqli_connect(SERVER,USERNAME,PASSWORD) or die ("Could not connect to database server");
$db = mysqli_select_db($connection,DB) or die ("Could not select to database");
?>
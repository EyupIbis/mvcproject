<?php


define('APP_ROOT', __DIR__);
define('BASE_URL', 'http://localhost/MVC/');
define('MODEL', APP_ROOT.'/model/');
define('VIEW', APP_ROOT.'/view/');
define('CONTROLLER', APP_ROOT. '/controller/');

require_once(VIEW.'header.php');
require_once(MODEL.'main.php');
require_once(VIEW.'footer.php');
?>
$conn = mysqli_connect('localhost','root','ibis75','MVC')
or die('Error connecting to MySQL server.');

$query = "SELECT * FROM vraag WHERE id=1 OR id=2";
mysqli_query($conn, $query) or die('Error querying database.');

$result = mysqli_query($conn, $query);

while ($row = mysqli_fetch_array($result)) {
echo '<h2>'.$row['vraag'].'</h2><br>';
echo $row['antwoord'].'<br>';
}
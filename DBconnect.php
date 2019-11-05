
<?php
$db = new mysqli('localhost:3307', 'root', '', 'canteen');
if ($db->connect_errno !== 0) {
  die ('We are down at the moment, please try again later');
}
//echo "Connected Successfully!";
?>
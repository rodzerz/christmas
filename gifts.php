<?php



require "config.php";
require "Database.php";
//require "Database.php";
$config = require("config.php");

$db = new Database($config["database"]);
$gifts=$db->query("SELECT * FROM gifts")->fetchAll();


echo "<ol>";
foreach($gifts as $gift){
echo "<li> $gift[name] </li>";
echo "<li> $gift[count_available] </li>";

}

echo "</ol>";
?>
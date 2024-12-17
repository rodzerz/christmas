<?php






require "config.php";
require "Database.php";

//datubāze
//savienot phph ar database


//lietotājvārds, parole


//ar PDO pieslegties datibāzei
//data source name



$config = require("config.php");

$db = new Database($config["database"]);

$children=$db->query("SELECT * FROM children")->fetchAll();





echo "<ul>";
foreach($children as $children){
echo "<li> $children[firstname] </li>";
echo "<li> $children[middlename] </li>";
echo "<li> $children[surname] </li>";
echo "<li> $children[age] </li>";
}

echo "</ul>";
?>



















?>
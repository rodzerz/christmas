
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

$letters=$db->query("SELECT * FROM letters")->fetchAll();
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
<div class="container">
        <h1>Letters to Santa</h1>
        <div class="child-container">
<?php 
foreach ($children as $child) {
    
    echo "<div class='letter'>" ,"<p><strong>" . $child["firstname"] . " " . 
    $child["middlename"] . " " . 
    $child["surname"] . ", " . 
    $child["age"] . " gadi</strong></p>"; 
    echo  "<div class='letter'>","<p>Vēstule: ";
    
    foreach($letters as $letter) {
        if ($letter["sender_id"] == $child["id"]) {
            echo "<div class='letter'>",$letter["letter_text"];
            break; 
        }
    }
    
    echo "</p>";
    
}


?>
</div>

</body>
</html>


<style>
body {
            font-family: 'Rock Salt', sans-serif;
            background-color: #f1f8e9; /* Light greenish background */
            color: #2e4d28; /* Dark green for text */
            margin: 0;
            padding: 0;
            box-sizing: border-box;
        }

        .container {
            width: 80%;
            margin: 0 auto;
            background-color: #fff;
            padding: 30px;
            border-radius: 10px;
            box-shadow: 0 4px 10px rgba(0, 0, 0, 0.1);
            background-image: url('https://www.transparenttextures.com/patterns/pw-maze.png');
            background-size: 30px 30px;
        }

        h1 {
            text-align: center;
            color: #c0392b;
            font-family: 'Chalkduster', cursive;
            font-size: 3em;
            margin-bottom: 30px;
        }

        .child-container {
            border: 3px solid #c0392b;
            border-radius: 10px;
            padding: 20px;
            margin-bottom: 20px;
            background-color: #f2f2f2;
            box-shadow: 0 3px 6px rgba(0, 0, 0, 0.1);
        }

        .child-container p {
            margin: 10px 0;
            font-size: 1.2em;
        }

        .letter {
            background-color: #e74c3c; /* Red for Christmas theme */
            color: white;
           
            
            font-style: italic;
            
        }

        .no-letter {
            background-color: #f39c12; /* Yellow if no letter */
            color: #fff;
            padding: 10px;
            border-radius: 5px;
            font-size: 1.1em;
        }

        .child-info {
            color: #27ae60; /* Green for child info */
            font-weight: bold;
        }

        .button {
            text-align: center;
            padding: 10px 20px;
            margin-top: 30px;
            background-color: #16a085;
            color: #fff;
            font-size: 1.2em;
            text-decoration: none;
            border-radius: 5px;
        }

        .button:hover {
            background-color: #1abc9c;
        }

</style>

















?>
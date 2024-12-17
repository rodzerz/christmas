<?php
class Database{


public $pdo;


function __construct($config){

$dsn = "mysql:" . http_build_query($config,"",";");
// PHP DATA OBJECT
$this->pdo = new PDO($dsn);
$this->pdo->setAttribute(PDO::ATTR_DEFAULT_FETCH_MODE, PDO::FETCH_ASSOC);
}

public function query($sql){


// SAgatavot statament
$statement = $this->pdo->prepare("SELECT * FROM children");
//izpildīt vaicājumi
$statement->execute();

return $statement;
}
}
?>
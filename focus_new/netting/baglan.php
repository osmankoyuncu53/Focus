<?php 

try
{
    $conn=new PDO("mysql:host=localhost;dbname=lotus","roo",""); 
}
catch(PDOException $e)
{
    echo $e -> getMessage();
}

?>

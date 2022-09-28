<?php 

try
{
    $conn=new PDO("mysql:host=localhost;dbname=lotus","root","1"); 
}
catch(PDOException $e)
{
    echo $e -> getMessage();
}

?>

<?php 

try
{
    $db=new PDO("mysql:host=localhost;dbname=lotus","root",""); 
}
catch(PDOException $e)
{
    echo $e -> getMessage();
}

?>
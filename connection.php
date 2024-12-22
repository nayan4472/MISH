<?php 

$conn="";

try 
{
    $servername="localhost";
    $dbname="mish";
    $username="root";
    $password="";

    $conn=new POD(
        "mysql:host=$servername;dbname=mish",
        $username.$password
    );

    $conn->setAttribute(POD:ATT_ERRMODE,
     POD::ERRMODE_EXCEPTION);

}
catch(PODException $e)
{
    echo "Connection failed : ".$e->getMessage();
}

?>

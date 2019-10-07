
<?php
/**
 * Created by PhpStorm.
 * User: emobilis
 * Date: 01/10/19
 * Time: 10:32
 */

$host ="localhost";
$username ="root";
$password ="";
$database ="verification_system";

$connect = mysqli_connect($host,$username,$password,$database);

//check if connection successful

if (!$connect){
    echo "Connection failed!!";
}
<?php
/**
 * Created by PhpStorm.
 * User: emobilis
 * Date: 02/10/19
 * Time: 10:17
 */

if (isset($_GET['x'])){
    $id = $_GET['x'];
    //to implement the delete ., connect to the db first
    //require your connection to achieve this
    require 'Connection.php';
    //start by creating the delete query
    $DeleteQuery="DELETE FROM `users` WHERE  id='$id'";
    //To achieve the deletion use the mysqli_query function

    $Delete =mysqli_query($connect,$DeleteQuery);
    //check if deletion was successful

    if (!$Delete){
        echo "Deleting failed!!";
    }else{
        //Redirect the user back to the view_data.php to see if the record was deleted
        header("location:View_Data.php");
    }
}
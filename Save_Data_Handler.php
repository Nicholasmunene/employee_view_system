<?php

if (!isset($_SESSION['Username'])){
    header("location:Login.php");
}
?>
<?php
/**
 * Created by PhpStorm.
 * User: emobilis
 * Date: 01/10/19
 * Time: 10:23
 */

//to save data into the db start by connecting to the database
//to do this create the connection on a separate file and require it
//from this file

require 'Connection.php';
//check if the save button has bee clicked

if (isset($_POST['btn_save'])){
    //start receiving data from the user
    $Name =$_POST['a'];
    $Position =$_POST['b'];
    $Status =$_POST['c'];
    $Id =$_POST['d'];
    $Salary =$_POST['e'];


    //save the data to the db using the insert query

    $InsertQuery ="INSERT INTO `users`(`id`, `name`, `position`, `status`, `id_custom`, `salary`) VALUES (NULL ,'$Name','$Position','$Status','$Id','$Salary')";
    //use mysqli_query function to execute the insert query
    $save =mysqli_query($connect,$InsertQuery);
    //check if saving was successful
    if (!$save){
        echo"Saving data failed!!";
    }else{
        //echo"Data saved successfully";
//Go back to save data file
        header("location:Save_Data.php");

    }

}

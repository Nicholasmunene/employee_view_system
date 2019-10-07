<?php
/**
 * Created by PhpStorm.
 * User: emobilis
 * Date: 04/10/19
 * Time: 10:04
 */

//to login we will need to assign a session to the user we will also require to the db



//check it the btn-log was clicked

if (isset($_POST['btn_log'])){
    require 'Connection.php';
    session_start();
    //start receiving data
    $Username =$_POST['uname'];
    $Password =$_POST['upassword'];

    //check to see if the details submitted  exist

    $SelectQuery = "SELECT * FROM `users_login_data` WHERE uname='$Username'&& upassword='$Password'";
    $Result =mysqli_query($connect,$SelectQuery);
    $NumRows =mysqli_num_rows($Result);
    //check if the count function found any record

    if ($NumRows==1){
        //assign session
        $_SESSION['Username'] =$Username;
        //redirect the user back to home page "save_data.php"
       header("location:Save_Data.php");

    }else{
        //login failed so return user on login page
        header("location:Register.php");
    }

}
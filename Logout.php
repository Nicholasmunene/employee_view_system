
<?php
/**
 * Created by PhpStorm.
 * User: emobilis
 * Date: 04/10/19
 * Time: 11:16
 */

session_start();
session_destroy();
header("location:Login.php");
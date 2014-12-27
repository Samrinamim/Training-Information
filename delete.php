<?php
/**
 * Created by PhpStorm.
 * User: User
 * Date: 12/26/2014
 * Time: 8:15 PM
 */

$id = $_GET['id'];
$link = mysqli_connect("localhost",
    "root",
    "",
    "mydb");
$query = "DELETE FROM `mydb`.`training_information` WHERE id = $id";
mysqli_query($link, $query);
header('location:list.php');

<?php
/**
 * Created by PhpStorm.
 * User: lict
 * Date: 12/25/14
 * Time: 4:04 PM
 */
$id = $_POST['id'];
$trainingtitle = $_POST['trainingtitle'];
$trainingdescription = $_POST['trainingdescription'];
$institution = $_POST['institution'];
$address = $_POST['address'];
$trainingyear = $_POST['trainingyear'];
$duration = $_POST['duration'];
$link = mysqli_connect("localhost",
    "root",
    "",
    "mydb");
$query = "UPDATE `mydb`.`training_information` SET
`trainingtitle` = '".$trainingtitle ."',`trainingdescription` = '".$trainingdescription."',`institution` = '".$institution."',`address` = '".$address."',`trainingyear` = '".$trainingyear."',`duration` = '".$duration."' WHERE `training_information`.`id` = $id;";
mysqli_query($link, $query);
header('location:list.php');

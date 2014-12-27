
<?php
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
    "test_db");
$query = "INSERT INTO `mydb`.`training_information` (
`id` ,
`trainingtitle`,
`trainingdescription`,
`institution`,
`address`,
`trainingyear`,
`duration`
)
VALUES (
'$id', '$trainingtitle', '$trainingdescription', '$institution', '$address', '$trainingyear', '$duration'
)";

mysqli_query($link, $query);
header('location:list1.php');

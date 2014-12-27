<?php
$id = $_GET['id'];
$link = mysqli_connect("localhost",
    "root",
    "",
    "mydb");
$query = "select * from training_information WHERE id = $id";
$result = mysqli_query($link, $query);
$row = mysqli_fetch_assoc($result);
?>
<form action="update.php" method="post">
    <input type="hidden" name="id" value="<?php echo $row['id'];?>" />

    <label>trainingtitle:</label>
    <input type="text" name="trainingtitle" value="<?php echo $row['trainingtitle'];?>" />
    <label>trainingdescription:</label>
    <input type="text" name="trainingdescription" value="<?php echo $row['trainingdescription'];?>"/>
    <label>institution:</label>
    <input type="text" name="institution" value="<?php echo $row['institution'];?>"/>
    <label>address:</label>
    <input type="text" name="address" value="<?php echo $row['address'];?>"/>
    <label>trainingyear:</label>
    <input type="text" name="trainingyear" value="<?php echo $row['trainingyear'];?>"/>
    <label>duration:</label>
    <input type="text" name="duration"value="<?php echo $row['duration'];?>" />

    <button type="submit">Submit</button>
</form>

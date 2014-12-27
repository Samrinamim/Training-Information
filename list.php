<?php
/**
 * Created by PhpStorm.
 * User: lict
 * Date: 12/22/14
 * Time: 3:54 PM
 */
$link = mysqli_connect("localhost",
    "root",
    "",
    "mydb");
$query = "select * from training_information";
$result = mysqli_query($link, $query);
//while( $row = mysqli_fetch_assoc($result) ){
// print_r($row);
//}
//alternative
//print_r($row);
?>
<ul>
    <li><a href="#">Download as XL</a> </li>
    <li><a href="#">Download as PDF</a> </li>
    <li><a href="create.html">Create New</a> </li>
</ul>
<table border="1" width="70%">
    <tr>
        <td>id</td>
        <td>trainingtitle</td>
        <td>trainingdescription</td>
        <td>institution</td>
        <td>address</td>
        <td>trainingyear</td>
        <td>duration</td>
        <td>Action</td>
    </tr>
    <?php
    foreach($result as $row){
        ?>
        <tr>
            <td><?php echo $row['id']?></td>
            <td><?php echo $row['trainingtitle']?></td>
            <td><?php echo $row['trainingdescription']?></td>
            <td><?php echo $row['institution']?></td>
            <td><?php echo $row['address']?></td>
            <td><?php echo $row['trainingyear']?></td>
            <td><?php echo $row['duration']?></td>
            <td>
                <a href="view.php?id=<?php echo $row['id']?>">View/Show</a> |
                <a href="edit.php?id=<?php echo $row['id']?>">Edit</a> |
                <a href="delete.php?id=<?php echo $row['id']?>">Delete</a> |
                <a href="softdelete.php?id=<?php echo $row['id']?>">Soft Delete</a>
            </td>
        </tr>
    <?php
    }
    ?>
</table>

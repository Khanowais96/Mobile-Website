<?php

include "db.php";
$delete_id=$_GET['dell'];
$delete_query="delete  from samsung WHERE id='$delete_id'";
$run=mysqli_query($conn,$delete_query);
if($run)
{

    echo "<script>window.open('control.php?deleted=user has been deleted','_self')</script>";
}

?>
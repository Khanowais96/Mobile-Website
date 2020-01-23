<html>
<head lang="en">
    <meta charset="UTF-8">
   <link rel="stylesheet" type="text/css" href="css/bootstrap.css"> 
    <title>View Users</title>
</head>
<style>
    .login-panel {
        margin-top: 150px;
    }
    .table {
        margin-top: 50px;

    }
        .mymenu{margin-top: 25px}

</style>

<body>



<div class="container" >
    <div class="row">
        

        <div class="col-sm-9 ">
        </div>

        <div class="col-sm-3 mymenu " >
            <nav class="navbar navbar-expand-sm bg-light navbar-priimary">
            <ul  class="navbar-nav ">
                <li class="nav-item " ><a class="nav-link li" href="admin.php">Log Out</a></li>
                    <li class="nav-item " ><a class="nav-link li" href="index.php">Website</a></li>

                
            </ul>
            </nav>
        </div>
    </div>
</div>





<h2 class="text-center" style="margin-top: 50px">Control Panel</h2>

<div class="table-scrol">
    
<div class="d-flex p-3 bg-secondary text-white" style="margin-bottom: 10px; font-size: 30px;">Huawei Mobile Phones</div>
<div class="table-scrol">
    
<div class="table-responsive">
    
<table class="table table-bordered table-hover table-striped" style="table-layout: fixed">
        <thead>

        <tr>

            <th>Product Id</th>
            <th>Product Name</th>
            <th>Product Price</th>
            <th>Product Image</th>
            <th>Delete Product</th>
            <th>Update Product</th>
            
        </tr>
        </thead>


        <?php
        include "db.php";
        $view_users_query="select * from products";
        $run=mysqli_query($conn,$view_users_query);

        while($row=mysqli_fetch_array($run))
        {
            $id=$row[0];
            $pname=$row[1];
            $pprice=$row[2];
            $pimg=$row[3];



        ?>

        <tr>
<!--here showing results in the table -->
            <td><?php echo $id;  ?></td>
            <td><?php echo $pname;  ?></td>
            <td><?php echo $pprice;  ?></td>
            <td><?php echo $pimg;  ?></td>
            <td><a href="delete.php?del=<?php echo $id ?>"><button class="btn btn-danger">Delete</button></a></td>
             <td><a href="update.php?upd=<?php echo $id ?>"><button class="btn btn-primary">Update</button></a></td>
               
        </tr>

        <?php   } ?>


</table>



</div>

</div>



<div class="d-flex p-3 bg-secondary text-white" style="margin-bottom: 10px; font-size: 30px;">Samsung Mobile Phones</div>



<div class="container-fluid">

<div class="table-responsive">
    
<table class="table table-bordered table-hover table-striped" style="table-layout: fixed">
        <thead>

        <tr>

            <th>Product Id</th>
            <th>Product Name</th>
            <th>Product Price</th>
            <th>Product Image</th>
            <th>Delete Product</th>
            <th>Update Product</th>
            
        </tr>
        </thead>


        <?php
        include "db.php";
        $view_users_query="select * from samsung";
        $run=mysqli_query($conn,$view_users_query);

        while($row=mysqli_fetch_array($run))
        {
            $id=$row[0];
            $name=$row[1];
            $price=$row[2];
            $img=$row[3];



        ?>

        <tr>
<!--here showing results in the table -->
            <td><?php echo $id;  ?></td>
            <td><?php echo $name;  ?></td>
            <td><?php echo $price;  ?></td>
            <td><?php echo $img;  ?></td>
            <td><a href="delete2.php?dell=<?php echo $id ?>"><button class="btn btn-danger">Delete</button></a></td>
             <td><a href="update2.php?updd=<?php echo $id ?>"><button class="btn btn-primary">Update</button></a></td>
               
        </tr>

        <?php   } ?>



</table>


</div>




</div>
<div class="d-flex p-3 bg-secondary text-white" style="margin-bottom: 10px; font-size: 30px;">Add New Products</div>

<div class="container-fluid" style="margin-bottom: 100px;">
    <div class="row">
        <div class="col-3 mx-auto">
            <div class="card">
                <div class="card-body">
                    <a href="add.php" class="btn btn-primary" style="margin-bottom: 20px">Add In Huawei  Products</a>
                     <a href="add2.php" class="btn btn-danger">Add In Samsung Products</a>
                </div>

         </div>

        </div>
    </div>
</div>

<script type="text/javascript" src="js/bootstrap.js"></script>

</body>

</html>

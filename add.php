<!DOCTYPE html>
<html>
<head>
	<title>Add Product</title>
	<link rel="stylesheet" type="text/css" href="css/bootstrap.css">
	<style type="text/css">
		 .card{
        margin-top: 100px;
    }
    .mymenu{margin-top: 25px}
	</style>
</head>
<body>

<div class="container" >
	<div class="row">
		

		<div class="col-sm-8 ">
		</div>

		<div class="col-sm-4 mymenu " >
			<nav class="navbar navbar-expand-sm bg-light navbar-priimary">
			<ul  class="navbar-nav ">
				<li class="nav-item " ><a class="nav-link li" href="control.php">Control Panel</a></li>
					<li class="nav-item " ><a class="nav-link li" href="add2.php">Samsung ADD</a></li>

				
			</ul>
			</nav>
		</div>
	</div>
</div>
















<div class="container">
    <div class="row">
        <div class="col-4 mx-auto">
            <div class="card">
                <div class="card-header bg-info ">
                    <h3 style="color: white">Add Products</h3>
                </div>
                <div class="card-body">
                    <form role="form" method="post" action="add.php" enctype="multipart/form-data"">
                        <fieldset>
                            <div class="form-group"  >
                                <input class="form-control" placeholder="Product Name" name="txtname" type="text" autofocus>
                            </div>
                            <div class="form-group">
                                <input class="form-control" placeholder="Product Price" name="txtprice" type="text" value="">
                            </div>
                            <div class="form-group">
                            	Select Image<input type="file" name="imgFile"  >
                            </div>




                            <input class="btn btn-lg btn-danger btn-block" type="submit" value="ADD" name="btnAdd" >


                        </fieldset>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>


<?php 
include "db.php";


if (isset($_POST['btnAdd']))
{
    
    $name=$_POST['txtname'];
    $price=$_POST['txtprice'];
    $targetpath='img/'.basename($_FILES['imgFile']['name']);

    if(move_uploaded_file($_FILES['imgFile']['tmp_name'],$targetpath ))
    {
            $q="INSERT INTO `products`( `name`, `price`, `images`) VALUES ('$name',$price,'$targetpath')";

            
    $result=mysqli_query($conn,$q);
    if ($result) {
        echo "<script>alert('Record added')</script>";
    }
    else
    {
        echo "<script>alert('Error')</script>";
    }

    }
    
}



 ?>










<script type="text/javascript" src="js/jquery-3.3.1.js"></script>
<script type="text/javascript" src="js/bootstrap.js"></script>
</body>
</html>
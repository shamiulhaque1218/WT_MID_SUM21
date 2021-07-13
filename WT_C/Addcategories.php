<?php
include 'controllers/category_controllers.php';
?>

<div class="center">
<h5 class= "text-danger"><?php echo $err_db;?></h5>
<form action="" method="post" class="form-horizontal form-material">
<div class="form-group">
<h4 class="text">Name:</h4>
<input type="text" name="name" value="<?php echo $name;?>" class="form-control">
<span class="text-danger"><?php echo $err_name;?></span>
</div>

<div class="form-group text-center">
<input type="submit" name="add_category" class="btn btn-success" value="Add Category" class="form-control">
</div>
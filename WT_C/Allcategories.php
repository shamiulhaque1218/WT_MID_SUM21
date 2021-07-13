<?php
include 'controllers/category_controllers.php';
$categories = getAllCategories();

?>

<div class ="center">
<h3 class="text">All Categories</h3>
<table class="table table-striped">
<thead>
<th>S1#</th>
<th>Name</th>
<th>Product Count</th>
<th></th>
<th></th>
</thead>
<tbody>
<?php
$i = 1;
foreach ($categories as $c){
	echo"<tr>";
	echo "<td>$i</td>";
	echo "<td>".$c["name"]."</td>";
	echo '<td><a href="Editcategory.php" class="btn btn-success">Edit</td>';
	echo '<td><a class="btn btn-danger">Delete</td>';
	echo"</tr>";


}
?>
</tbody>
</table>
</div>
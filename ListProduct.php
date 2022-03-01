<center> 
<?php 
// Import the file where we defined the connection to Database. 
require_once "connection.php"; 
$per_page_record = 16; // Number of entries to show in a page. 
// Look for a GET variable page if not found default is 1. 
if (isset($_GET["page"])) { 
$page = $_GET["page"]; 
} 
else { 
$page=1; 
} 
$start_from = ($page-1) * $per_page_record; 
$query = "SELECT * FROM TblProduct order by Productid desc LIMIT $start_from, $per_page_record"; 
$rs_result = mysqli_query ($conn, $query); 
?>
<div class="container"> 
<br> 
<div> 
<div class="row"> 
<?php 
while ($row = mysqli_fetch_array($rs_result)) { 
// Display each field of the records. 
?> 
<div class="col-md-3">
<div class="card">
<a href="#">
<img src='img/<?php echo $row["ProductImage"]; ?>' class="card-img-top">
</a>
<div class="card-body">
<div class="row">
<div class="col-md-8">
<h6 class="card-title"><?php echo $row["Name"]; ?> | <?php echo $row["ProductID"]; ?> </h6>
</div>
<div class="col-md-4">
<p class="card-text">$<?php echo $row["Price"]; ?></p>
</div>
</div>
<a href="#" class="btn btn-primary">Buy Now</a>
</div>
</div>
<br>
</div>
<?php 
}; 
?> 
</div> 
<div class="pagination">
<?php 
$query = "SELECT COUNT(*) FROM TblProduct"; 
$rs_result = mysqli_query($conn, $query); 
$row = mysqli_fetch_row($rs_result); 
$total_records = $row[0]; 
echo "</br>"; 
// Number of pages required. 
$total_pages = ceil($total_records / $per_page_record); 
$pagLink = ""; 
if($page>=2){ 
echo "<a href='ListProductWithPaging.php?page=".($page-1)."'> Prev </a>"; 
} 
for ($i=1; $i<=$total_pages; $i++) { 
if ($i == $page) { 
$pagLink .= "<a class = 'active' href='ListProductWithPaging.php?page=" 
.$i."'>".$i." </a>"; 
} 
else { 
$pagLink .= "<a href='ListProductWithPaging.php?page=".$i."'> 
".$i." </a>"; 
} 
}; 
echo $pagLink; 
if($page<$total_pages){ 
echo "<a href='ListProductWithPaging.php?page=".($page+1)."'> Next </a>"; 
} 
?> 
</div> 
</div> 
</div> 
</center> 
<script>
function go2Page() 
{ 
var page = document.getElementById("page").value; 
page = ((page><?php echo $total_pages; ?>)?<?php echo $total_pages; ?>:((page<1)?1:page)); 
window.location.href = 'ListProductWithPaging.php?page='+page; 
} 
</script>
<?php
// Initialize the session
session_start();
// Check if the user is logged in, if not then redirect him to login page
if(!isset($_SESSION["loggedin"]) || $_SESSION["loggedin"] !== true){
header("location: login.php");
exit;
}
?>
<?php
include_once 'connection.php';
if($_SERVER["REQUEST_METHOD"] == "POST"){
if(isset($_POST['Insert']))
{ 
$name = $_POST['ProductName'];
$price = $_POST['Price'];
if(move_uploaded_file($_FILES["filUpload"]["tmp_name"],"img/".$_FILES["filUpload"]["name"]))
{
$Images = $_FILES["filUpload"]["name"];
}
$sql = "INSERT INTO tblproduct (Name,ProductImage,Price) VALUES ('$name','$Images','$price')";
if (mysqli_query($conn, $sql)) {
echo "New record has been added successfully !";
} else {
echo "Error: " . $sql . ":-" . mysqli_error($conn);
}
}
if(isset($_POST['Update']))
{ 
$id = $_POST['ProductID'];
$name = $_POST['ProductName'];
$price = $_POST['Price'];
if(move_uploaded_file($_FILES["filUpload"]["tmp_name"],"img/".$_FILES["filUpload"]["name"]))
{
$Images = $_FILES["filUpload"]["name"];
}
$sql = "Update tblproduct set Name='$name',ProductImage='$Images',Price='$price' Where ProductID=$id";
if (mysqli_query($conn, $sql)) {
echo "Edit record has been update successfully !";
} else {
echo "Error: " . $sql . ":-" . mysqli_error($conn);
}
}
if(isset($_POST['Delete']))
{ 
$id = $_POST['ProductID'];
$sql = "Delete from tblproduct Where ProductID=$id";
if (mysqli_query($conn, $sql)) {
    echo "Delete record has been deleted successfully !";
} else {
echo "Error: " . $sql . ":-" . mysqli_error($conn);
}
}
}
?>
<!DOCTYPE html>
<html lang="en">
<head>
<meta charset="UTF-8">
<title>Create Record</title>
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.css">
<style type="text/css">
.wrapper{
width: 900px;
margin: 0 auto;
}
</style>
</head>
<body>
<div class="wrapper">
<div class="container-fluid">
<div class="row">
<div class="col-md-12">
<div class="page-header">
<h2>Contact Form <a href="logout.php" class="btn btn-danger ml-3">Sign Out of Your Account</a></h2>
</div>
<p>Please fill this form and submit to add products record to the database.</p>
<form action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]); ?>" method="post" enctype="multipart/form-data">
<div class="form-group">
<label>Product ID</label>
<input type="text" name="ProductID" class="form-control">
</div>
<div class="form-group">
<label>Product Name</label>
<input type="text" name="ProductName" class="form-control">
</div>
<div class="form-group">
<label>Product Price</label>
<input type="text" name="Price" class="form-control">
</div>
<div class="form-group">
<label>Images</label>
<input type="file" name="filUpload" class="form-control">
</div>
<input type="submit" class="btn btn-primary" name="Insert" value="Insert">
<input type="submit" class="btn btn-primary" name="Update" value="Update">
<input type="submit" class="btn btn-danger" name="Delete" value="Delete">
</form>
</div>
</div>
<div class="row">
<div class="col-md-12">
<?php 
// Import the file where we defined the connection to Database. 
$query = "SELECT * FROM TblProduct order by ProductID Desc"; 
$rs_result = mysqli_query ($conn, $query); 
?>
<div class="container">
<br>
<div>
<h1>List Product</h1>
<p></p>
<div class="row">
<?php 
while ($row = mysqli_fetch_array($rs_result)) { 
// Display each field of the records. 
?>
<div class="col-12 col-sm-6 col-lg-4 col-md-4">
<div class="card">
<a href="#">
<img src='img/<?php echo $row["ProductImage"]; ?>' class="card-img-top">
</a>
<div class="card-body">
<div class="row">
<div class="col-sm-7">
<h5 class="card-title">
<?php echo $row["Name"]; ?> |
<?php echo $row["ProductID"]; ?>
</h5>
</div>
<div class="col-sm-5">
<p class="card-text">Price $
<?php echo $row["Price"]; ?>
</p>
</div>
</div>
<a href="#" class="btn btn-primary">Buy Now</a>
</div>
</div>
<br>
</div>
<?php 
};
mysqli_close($conn);
?>
</div>
</div>
</div>
</div>
</div> 
</div>
</div>
</body>
</html>
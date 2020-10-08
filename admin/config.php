<?php
session_start();
$db=mysqli_connect('localhost','root','','content_management');
$errors= array();

//$con=mysqli_connect($servername, $username, $password1, $db) or die("connection failed");
//$mysqli=new mysqli($servername, $username, $password1, $db);
//log user in from login page
if (isset($_POST['login']))
{
    $username= ($_POST['username']);
    $password= ($_POST['password']);
    
if(empty($username))
{
	array_push($errors, "Username is required");
}

if(empty($pass1))
{
	array_push($errors, "Password is required");
}
if (count($errors)==0){
	$password1= md5($password);//encript password before comparing with that from data base
	$query="SELECT * FROM user WHERE username='$username' AND password='$password'";
	$result = mysqli_query($db, $query);

	if(mysqli_num_rows($result)==1){
		$row = mysqli_fetch_assoc($result);
		$user_id = $row['user_id'];
		$username = $row['name'];
		$_SESSION["user_id"] = $user_id;

		header("Location: index.php");		    
		}else{
            // array_push($errors,"wrong username/password");
            echo '<script type="text/javascript">
            window.onload = function () { alert("Username or password incorrect..!!"); }
            </script>';
		}   
}
}

// insert details to product table
if (isset($_POST['addproduct']))
{
$p_name= ($_POST['p_name']);
$p_code= ($_POST['p_code']);
$p_price= ($_POST['p_price']);
$p_type= ($_POST['p_type']);
$category= ($_POST['category']);
$length= ($_POST['length']);
$width= ($_POST['width']);
$height= ($_POST['height']);

//fields empty
if(empty($p_name))
{
array_push($errors,"Please enter product name!");
}
if(empty($p_code))
{
array_push($errors,"Please enter product code");
}

//no errors
if(count($errors) == 0)
{
$sql="INSERT INTO 'products'('p_id', 'name', 'product_code', 'price', 'type', 'length', 'width', 'height','cat_id') VALUES ('$p_name','$p_code','$p_price','$p_type','$length','$width','$height',$category)";
mysqli_query($db, $sql);

header('location:website.php');
}
}

//Update Website Table
if(isset($_POST['update_user'])){
	$web_id= ($_REQUEST['web_id']);
	$web_qry = "SELECT * FROM websites where web_id=$web_id"; 
	$result = mysqli_query($db, $web_qry);
	while($row = $result->fetch_assoc()) {    
	$web_name = $row['web_name'];
	$url = $row['url'];
	}	
	$web_update_qry = "UPDATE websites
	SET web_name= $web_name, url=$url
	WHERE web_id=$web_id";
}

//Delete Websites
if (isset($_GET['web_delete']))
{
$webid = ($_GET['web_id']);
$web_delete_qry="DELETE FROM websites WHERE web_id = $webid;";
mysqli_query($db, $web_delete_qry);

header("Location: website.php");
}

//logout
if(isset($_GET['logout'])){
session_destroy();
header('location:index.php');
}
?>
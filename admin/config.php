<?php
session_start();
$db=mysqli_connect('localhost','root','','content_management');
$errors= array();
$fullname="";
$pass="";

//$con=mysqli_connect($servername, $username, $password1, $db) or die("connection failed");
//$mysqli=new mysqli($servername, $username, $password1, $db);
//log user in from login page
if (isset($_POST['login']))
{
    $username= ($_POST['username']);
    $pass1= ($_POST['password']);
    
if(empty($username))
{
	array_push($errors, "Username is required");
}

if(empty($pass1))
{
	array_push($errors, "Password is required");
}
if (count($errors)==0){
	$password1= md5($pass1);//encript password before comparing with that from data base
	$query="SELECT * FROM users WHERE user_name='$username' AND password='$password1'";
	$result = mysqli_query($db, $query);

	if(mysqli_num_rows($result)==1){
		$row = mysqli_fetch_assoc($result);
		$user_id = $row['user_id'];
		$username = $row['name'];
		$_SESSION["user_id"] = $user_id;

		header("Location: home.php");		    
		}else{
            // array_push($errors,"wrong username/password");
            echo '<script type="text/javascript">
            window.onload = function () { alert("Username or password incorrect..!!"); }
            </script>';
		}   
}
}

// insert details to website table
if (isset($_POST['addweb']))
{
$webname= ($_POST['web_name']);
$url= ($_POST['url']);

//fields empty
if(empty($webname))
{
array_push($errors,"Please enter website name!");
}
if(empty($url))
{
array_push($errors,"Please enter URL!");
}

//no errors
if(count($errors) == 0)
{
$sql="INSERT INTO websites (web_name,url) VALUES ('$webname','$url')";
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
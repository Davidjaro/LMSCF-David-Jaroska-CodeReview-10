<?php 

session_start();
$title = '';
$author = '';
$ISBN = '';
$update = false;
$id = 0;
$desc = '';
$type = '';
$publisher = '';
$date = date('');


$servername = "localhost";
$username   = "root";
$password   = "";
$dbname     = "cr10_david_jaroska_biglibrary";

$conn = mysqli_connect($servername, $username, $password, $dbname);

if (!$conn) {
   die("Connection failed: " . mysqli_connect_error() . "\n");
}
if (isset($_GET['delete'])){
	$id = $_GET['delete'];
	$conn->query("DELETE FROM `entries` WHERE `entries`.`id`=$id") or die($conn->error());
	unset($_SESSION['message']);
	$_SESSION['message'] = "Record has been deleted";
	$_SESSION['msg_type'] = "danger";

	header("location: cr10.php");
		
}
if (isset($_POST['save'])){
	$title = $_POST['title'];
	$author = $_POST['author'];
	$ISBN = $_POST['isbn'];
	$desc = $_POST['description'];
	$type = $_POST['type'];
	$publisher = $_POST['publisher'];
	$date = $_POST['pub_date'];
	$avatar_path = $conn->real_escape_string('img/'.$_FILES['avatar']['name']);

	copy($_FILES['avatar']['tmp_name'], $avatar_path);
	$conn->query("INSERT INTO `entries` (title, author, ISBN, `desc`, img, avaiable, publisher, pub_date)
	VALUES ('$title', '$author', '$ISBN', '$desc', '$avatar_path', '$type', '$publisher', '$date')");
	unset($_SESSION['message']);
	$_SESSION['message'] = "Record has been saved";
	$_SESSION['msg_type'] = "success";

	header("location: cr10.php");
}
if (isset($_GET['edit'])){
	$id = $_GET['edit'];
	$update = true;
	$result = $conn->query("SELECT * FROM `entries` WHERE `entries`.`id`=$id") or die($conn->error());
	if ($result->num_rows){
		$row = $result->fetch_array();
		$title = $row['title'];
		$author = $row['author'];
		$ISBN = $row['ISBN'];
		$desc = $row['desc'];
		$img = $row['img'];
		$type = $row['avaiable'];
		$publisher = $row['publisher'];
		$date = $row['pub_date'];
	}
}
if (isset($_POST['update'])){
	$id = $_POST['id'];
	$title = $_POST['title'];
	$author = $_POST['author'];
	$isbn = $_POST['isbn'];
	$desc = $_POST['description'];
	$type = $_POST['type'];
	$publisher = $_POST['publisher'];
	$date = $_POST['pub_date'];
	$avatar_path = $conn->real_escape_string('img/'.$_FILES['avatar']['name']);

	copy($_FILES['avatar']['tmp_name'], $avatar_path);
	$conn->query("UPDATE `entries`SET title='$title', author='$author', isbn='$isbn', `desc`='$desc', img='$avatar_path', avaiable='$type', pub_date='$date', publisher='$publisher'  WHERE `entries`.`id`=$id") or die($conn->error());
	unset($_SESSION['message']);
	$_SESSION['message'] = "Record has been changed";
	$_SESSION['msg_type'] = "info";

	header("location: cr10.php");
}
?>
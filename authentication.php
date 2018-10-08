
<?php  
session_start();
require('db.php');


if (isset($_POST['user_id']) and isset($_POST['user_pass'])){
   
// Assigning POST values to variables.
$username = $_POST['user_id'];
$password = md5($_POST['user_pass']);

// CHECK FOR THE RECORD FROM TABLE
$query = "SELECT * FROM `users` WHERE username='$username' and Password='$password'";

$result = mysqli_query($connection, $query) or die(mysqli_error($connection));
$count = mysqli_num_rows($result);

if ($count == 1){
?>
<body style="background-color: #A9D0F5">
    
    <div style="margin: 180px 400px" ><h2 style="text-align: center">
    <? echo "Welcome ".$username." your login credentials are verified"; ?>
    </h2></div>

</body>
<?

$_SESSION['login'] = true;
//header ('location: dashboard.php');
header('Refresh: 2; URL=random.php');

}else{
    ?>
    <div style="margin: 180px 400px"><h2>
<? echo "Invalid Login Credentials"; ?>

</h2></div>
<?
header('Refresh: 3; URL=login.php');
}
}
?>

<link rel="stylesheet" href="styles.css">
<?
session_start();
require ('db.php');

if ($_SESSION['login'] == false){
    header('Location: index.php');
}

$sql = "SELECT joke_id, setup, punchline FROM jokes ORDER BY
rand() LIMIT 1";
$result = mysqli_query($connection, $sql);
$row = $result->fetch_assoc();
$JokeId = $row['joke_id'];

if (isset($_GET['funny'])){
    
$sql = "UPDATE jokes SET rating = rating + 1 WHERE joke_id = $JokeId";
$result = mysqli_query($connection, $sql);
}
if (isset($_GET['notfunny'])){
    
$sql = "UPDATE jokes SET rating = rating - 1 WHERE joke_id = $JokeId";
$result = mysqli_query($connection, $sql);
}
if (isset($_GET['logout'])){
    header('Location: index.php');
    session_unset();
}


?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="styles.css">
    <title>RANDOM</title>
</head>
    <body style="background-color:#A9D0F5">

        <div style="margin: 180px 400px; text-align: center; background-color: #60778c; padding: 20px;">
            <h2><?
                echo $row['setup']."........"." ".$row['punchline'];
                ?>
            </h2>
            <a href="?funny=1"><img src="images/like.png" id="like"></a>
            <a href="?notfunny=1"><img src="images/unlike.png" id="unlike"></a>
        </div>
        <div style="background-color: cornflowerblue; text-align: center; margin: 0px 500px;">
            <a href="?logout=1"><img src="images/logout.png" id="home">LOGOUT</a>        
        </div>
    </body>
</html>
<?
require ('db.php');

$sql = "SELECT setup, punchline, rating FROM jokes ORDER BY rating desc limit 10";
$result = mysqli_query($connection, $sql);






?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
</head>
<body style="background-color: #C1AEFA"><?
    while ($row = $result->fetch_assoc()) {?>
            <div style="background-color: #beafea; margin: 150px 400px; text-align: center; padding: 20px;"><h1><? echo $row['setup']."........".$row['punchline']; ?></h1><p>rating</p><h1><? echo $row['rating']?></h1></div>
<?}?>
    <div style=" margin: 150px 400px; text-align: center;"><a href="index.php" style="text-decoration: none;"><h2>Home</h2></a></div>
</body>
</html>
<?
$servername = '192.168.95.100:4075';
$username = 'root';
$password = 'root';
$database = 'local';

$connection = mysqli_connect($servername, $username, $password,$database);
    mysqli_select_db($connection, $database);

function setConnection($connection,$servername, $username, $password, $database) {
  // Create connection
  $connection = new mysqli($servername, $username, $password, $database);

  // Check connection
  if ($connection->connect_error) {
      die("Connection failed: " . $connection->connect_error);
  }
  return $connection;

}
?>
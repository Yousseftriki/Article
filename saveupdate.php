<html>
<body>

<?php
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "demo";

// Create connection
$conn = new mysqli($servername, $username, $password, $dbname);
// Check connection
if ($conn->connect_error) {
  die("Connection failed: " . $conn->connect_error);
}
$id=$_POST['id'];
$des=$_POST['designation'];
$prix=$_POST['prix'];
$qte=$_POST['qte'];
$sql = "UPDATE  article SET designation= '$des', prix=$prix, qte=$qte where id=$id";
echo $sql;

if ($conn->query($sql) === TRUE) {
  echo "record updated successfully";
} else {
  echo "Error: " . $sql . "<br>" . $conn->error;
}

$conn->close();
?>

<a href="liste.php"> Retourner à la liste  </a>

</body>
</html>

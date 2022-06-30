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

$des=$_POST['designation'];
$prix=$_POST['prix'];
$quantite=$_POST['qte'];
$sql = "INSERT INTO article (designation, prix, qte) VALUES ('$des','$prix','$quantite')";


if ($conn->query($sql) === TRUE) {
  echo "New record created successfully";
} else {
  echo "Error: " . $sql . "<br>" . $conn->error;
}

$conn->close();
?>

<a href="liste.php"> Retourner à la liste  </a>

</body>
</html>

<!DOCTYPE html>
<html>
<head>
<style>
table, th, td {
    border: 1px solid black;
}
</style>
</head>
<body>

<a href="add.php"> Ajouter un article </a>

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

$sql = "SELECT id, designation, prix, qte FROM article";
$result = $conn->query($sql);

if ($result->num_rows > 0) {
    echo "<table><tr><th>ID</th><th>Designation</th><th>Prix</th><th>Qte</th><th></th></tr>";
    // output data of each row
    while($row = $result->fetch_assoc()) {

        $id = $row["id"] ;
        $designation = $row["designation"];
        $prix = $row["prix"];
        $qte = $row["qte"]; 

        echo "<tr>
        <td>" . $row["id"]
         ."</td><td>" . $row["designation"]
         ."</td><td>" . $row["prix"]
         ."</td><td>" . $row["qte"]
         ."</td><td><button type='button' onclick='location.href=\"update.php?id=$id&des=$designation&qte=$qte&prix=$prix\"'>U</button>"
         . "</td></tr>";
    }
    echo "</table>";
} else {
    echo "0 results";
}

$conn->close();
?>

</body>
</html>
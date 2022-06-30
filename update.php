<html>
<body>





<form action="saveupdate.php" method="post">
id: <input type="text" name="id" value="<?php echo $_GET['id'] ?>"><br>
designation: <input type="text" name="designation" value="<?php echo $_GET['des'] ?>"><br>
qte: <input type="text" name="qte" value="<?php echo $_GET['qte'] ?>"><br>
prix: <input type="text" name="prix" value="<?php echo $_GET['prix'] ?>"><br>
<input type="submit">
</form>

</body>
</html>
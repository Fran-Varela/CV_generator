<?php
include("config.php");

$id = $_GET['id'];

$sql = "DELETE FROM cvs WHERE id = $id";
mysqli_query($conn, $sql);

header("Location: listar.php");
exit;

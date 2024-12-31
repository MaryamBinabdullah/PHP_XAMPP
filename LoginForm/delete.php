<?php 
if (isset($_GET['id'])) {
    include "server.php";
    include "conn.php";
	$id = $_GET['id'];
	$sql = "DELETE FROM users WHERE id=?";
    $stmt = $conn->prepare($sql);
    $stmt->execute([$id]);
    $sm = "Successfully Deleted";
	header("Location: index.php?success=$sm");
}else {
	header("Location: index.php");
}
?>
<?php
$title = $_POST['titletask'];
$id = $_POST['taskid'];
require("sqlConnector.php");
$conn = new Sqlconnector();
$conn->deleteTask($id);
echo "<p><strong>$title</strong> a été supprimé.</p>";
echo "<meta http-equiv='refresh' content='3;URL=../index.php'>";
?>
<?php
$id = $_POST['taskid'];
$title = $_POST['titletask'];
$desc = $_POST['desctask'];
require("sqlConnector.php");
$conn = new Sqlconnector();
if ($title == "") {
    $conn->deleteTask($id);
    echo "<p>La tache id = <strong>$id</strong> a été supprimé.</p>";
    echo "<meta http-equiv='refresh' content='3;URL=../index.php'>";
}
else {
    $conn->updateTask($id,$title,$desc);
    echo "<p><strong>$title</strong> a été modifié.</p>";
    echo "<meta http-equiv='refresh' content='3;URL=../index.php'>";
}
?> 
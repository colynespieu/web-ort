<?php
$title = $_POST['title'];
$desc = $_POST['desc'];
require("sqlConnector.php");
$conn = new Sqlconnector();
if ($title == "") {
    echo "<p>C'est mieux avec le <strong>Titre</strong></p>";
    echo "<meta http-equiv='refresh' content='3;URL=../index.php'>";
}
else {
    $conn->addTask("$title","$desc");
    echo "<p><strong>$title</strong> a été ajouté.</p>";
    echo "<meta http-equiv='refresh' content='3;URL=../index.php'>";
}
?> 
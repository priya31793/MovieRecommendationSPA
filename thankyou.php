<?php

require 'connection.php';
$conn    = Connect();
$title    = $conn->real_escape_string($_POST['title']);
$release   = $conn->real_escape_string($_POST['release_date']);
$duration = $conn->real_escape_string($_POST['duration']);
$genre = $conn->real_escape_string($_POST['genre']);
$syn = $conn->real_escape_string($_POST['synopsis']);

$query   = "INSERT into aip (title,release_date,duration,genre,synopsis) VALUES('" . $title . "','" . $release . "','" . $duration . "','" . $genre . "','" . $syn . "')";
$success = $conn->query($query);

if (!$success) {
    die("Couldn't enter data: ".$conn->error);

}
else {
	echo 'update.php';
}



$conn->close();

?>
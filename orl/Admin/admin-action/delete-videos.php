<?php
include("session-start.php");
$id = $_GET['id'];
$conn = mysqli_connect("localhost", "root", "($@#()*2=6@SuYoG", "orl");
$sql = "DELETE FROM videos WHERE id=$id";
$res = mysqli_query($conn, $sql);
if ($res == TRUE) {
    $_SESSION['delete-videos'] = "Video Deleted Successfully.";
    header('location:http://localhost/ORL/admin/admin-videos.php');
} else {
    $_SESSION['delete-videos'] = "Failed To Delete Try Again.";
    header('location:http://localhost/ORL/admin/admin-videos.php');
}

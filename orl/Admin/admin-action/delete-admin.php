<?php
include("session-start.php");
$id = $_GET['id'];
$conn = mysqli_connect("localhost", "root", "($@#()*2=6@SuYoG", "orl");
$sql = "DELETE FROM admin WHERE id=$id";
$res = mysqli_query($conn, $sql);


if ($res == TRUE) {
    $_SESSION['delete-admin'] = "Admin Deleted Successfully.";
    header('location:http://localhost/ORL/admin/admin-admins.php');
} else {
    $_SESSION['delete-admin'] = "Failed To Delete Try Again.";
    header('location:http://localhost/ORL/admin/admin-admins.php');
}

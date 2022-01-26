<?php include("admin-action/session-start.php");
include("login-check.php");
?>


<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>ORL-ADMIN</title>
    <link rel="stylesheet" href="../../orl/css/admin-style.css" />
</head>

<body>
    <!-- navigation bar -->
    <section>
        <div class="admin-page-navbar">
            <div class="admin-page-navbar-logo">
                <a href="index.php">ORL<span style="color: rgb(238, 189, 124)">|</span><span class="admin-page-navbar-logo2">Admin Pannel</span></a>
            </div>
            <div class="admin-page-navbar-menus">
                <ul>
                    <li><a href="index.php">Home</a></li>
                    <li><a href="admin-admins.php">Admins</a></li>
                    <li><a href="admin-videos.php">Videos</a></li>
                    <li><a href="admin-action/log-out.php">Logout</a></li>
                </ul>
            </div>
        </div>
    </section>
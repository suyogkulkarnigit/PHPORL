<?php

if (isset($_SESSION['user']) != true) {
    // $_SESSION['no-login-message'] = "please login to access admin dashboard";

?>

    <script type="text/javascript">
        alert("please login to access admin dashboard.");
    </script><?php

                header('location:http://localhost/ORL/admin/admin-login.php');
            }
                ?>
<?php
 @session_start();
                if(isset($_SESSION['name']))
                {
                unset($_SESSION['name']);
                }
                echo header('location:index.php');
?>
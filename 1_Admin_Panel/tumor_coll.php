<?php
session_start();
if (!isset($_SESSION['admin'])) {
    header("Location: Admin_login.php");
    exit();
}
include("./header.php");
include("../3_Tumor_Collaction/drop_down.php");

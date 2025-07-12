<?php
session_start();
include "secadm.php";
session_unset();
session_destroy();
header("Location:index.php");
?>
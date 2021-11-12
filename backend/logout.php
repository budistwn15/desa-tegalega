<?php
session_start();
unset($_SESSION['nama']);
unset($_SESSION['email']);

$_SESSION['successLogout'] = "Berhasil Logout";
header("Location:login");

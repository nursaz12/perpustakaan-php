<?php
//memulai interaksi
session_start();
//menghilangkan session
session_destroy();
session_unset();
//pindahin ke halaman login.php
header("Location: login.php");
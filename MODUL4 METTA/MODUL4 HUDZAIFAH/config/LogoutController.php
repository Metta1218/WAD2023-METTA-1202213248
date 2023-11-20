<?php

// (1) Hapus cookie dengan key id 

setcookie('id', '', time() - 3600, '/views');

// session_unset();

// (2) Mulai session
session_start();

//

// (3) Hapus semua session yang berlangsung
session_destroy();
session_unset();

//

// (4) Lakukan redirect ke halaman login awal

header('Location: ../views/login.php');
//

exit;

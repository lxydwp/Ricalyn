<?php
    session_start();
    setcookie('user', '', time()-1000);
    setcookie('user', '', time()-1000, '/');
    session_destroy();
    header("Location: index.php");
    exit();

?>
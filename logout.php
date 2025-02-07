<?php
session_start();

echo "Checkpoint 1";

// Destroy the session
session_unset();
session_destroy();

echo "Checkpoint 2";

header('Location: User_Login_Page.php');
exit();
?>
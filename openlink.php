<?php
session_start();
$link=(string)$_SESSION['link'];
//echo file_get_contents($link);
echo '<a href='.$link.'>Click here</a>';
?>
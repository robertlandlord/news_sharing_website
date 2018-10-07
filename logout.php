<?php
session_start();
$_SESSION['loggedin']=0;
$_SESSION['user_id']=0;
header("Location: http://ec2-13-59-77-129.us-east-2.compute.amazonaws.com/~robertlandlord/module3/main_news_page.php");
session_destroy();
?>
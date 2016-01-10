<?php

//index.php
//check for login
session_start();

if(isset($_SESSION['user'])) {
    $loggedin=true;
} else { 
    $loggedin=false;
}

?>

<?php
if(!$loggedin) {
    //render login page
  header('location:/loginpage.php');
    exit;
} else {
    header('location:/dashboard.php');
    exit;
}

?>



<?php

//login-action.php

include('consql.php');

$expenseDB = new expenseDB();

$expenseDB->init();

if($_SERVER['REQUEST_METHOD']=='POST') {
    $uname = $_POST['uname'];
    $pass = $_POST['pass'];

    $con = $expenseDB->getSqlConnection();
    $sql = 'SELECT * from `users` where uname="'.$uname.'" AND pass="'.$pass.'"';
    $result = $expenseDB->performSql($con,$sql);

    $count = $result->num_rows;

    if($count<1) {
      $msg = 'login failed!<br>';
        $msg.='Try login again here <a href = "/loginpage.php"> LOGIN </a><br>';
        $msg.='<br> sql => '.$sql;
        $msg.='<br>Count => '.$result->num_rows;
        $expenseDB->closeSqlConnection($con);
    } else {
        session_start();
        $_SESSION['uname']=uname;
        header('location:/dashboard.php');
        $expenseDB->closeSqlConnection($con);
        exit;
    }
} else {
    $msg.='Well this URL is for internal purpose!';
        $msg.='<br>Enjoy using app <a href="/dasboard.php"> <strong> HERE </strong> </a>';
}

?>

<html>

<head>
    Expense Manager!
</head>
    
    <body>
    
        <h1> Login Result</h1>
        
        <br><hr><br>
        <p> <?php echo $msg ?> <br> Debug => <?php print_r($result) ?>   </p>
    
    </body>

</html>
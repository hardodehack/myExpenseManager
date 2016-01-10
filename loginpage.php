<?php
//loginpage.php

session_start();

if(isset($_SESSION['user'])) {
    $loggedin=true;
} else { 
    $loggedin=false;
}
?>

<?php

if($loggedin) {
    //render login page
  header('location:/dashboard.php');
    exit;
}

?>


<html>

<head>
    <title> Expense Manager</title>
    
    </head>
    
    <body>
    
    <h1> Expense manager for friends!</h1>
        
        
        <table>
        
            <tr>
            
            <td>Username :  </td> <td> <input type='text' name='uname' placeholder='Enter Your Username'/> </td>
            </tr>
        
        </table>
    
    </body>

</html>


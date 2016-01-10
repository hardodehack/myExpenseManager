<?php

include('credentials.php');

class expenseDB {
    
    var $con=null;
    var $result=null;
    var $values = null;
    
    public function init() {
        $this->values = new values();
    }
    
    public function getSqlConnection() {
        $con=mysqli_connect($this->values->dbhost,$this->values->dbuser,$this->values->dbpass,$this->values->dbname);
        // Check connection
        if (mysqli_connect_errno())
        {
            return false;
        } else {
            return $con;
        }
    }

    public function closeSqlConnection($con) {
        mysqli_close($con);
    }

    public function performSql($con,$sql) {
        // Perform queries
        $result = mysqli_query($con,$sql);
        return $result;
    }

    /*    while($row = $result->fetch_assoc()){
          echo '{"allow":'.$row['validateResp'].'}';

        }
        */
}

?>
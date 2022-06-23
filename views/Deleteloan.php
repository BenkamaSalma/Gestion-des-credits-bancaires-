<?php 
    if(isset($_POST['idl'])){
        $exitloan = new TypeofloansController();
        $exitloan->deleteLoan();
    }
?>
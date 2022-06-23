<?php 
    if(isset($_POST['id'])){
        $exitManager = new ManagerController();
        $exitManager->deleteManager();
    }
?>
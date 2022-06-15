<?php
    include '../php/app.php';
    
    if($get['action'] == 'update'){
        
        update_color($get['name'],$get['id']);

    }else{

        delete_color($get['id']);
    }

    ?>
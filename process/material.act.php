<?php
    include '../php/app.php';
    
    if($get['action'] == 'update'){
        
        update_material($get['name'],$get['id']);

    }else{

        delete_material($get['id']);
    }

    ?>
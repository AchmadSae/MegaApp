<?php
    include '../php/app.php';
    
    if($get['action'] == 'update'){
        
        update_seater($get['name'],$get['id']);

    }else{

        delete_seater($get['id']);
    }

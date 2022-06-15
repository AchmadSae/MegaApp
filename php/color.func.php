<?php

    function select_color($sql,$cond=""){

        $data = [];

        if($cond !=""){

            $cond = " and ".$cond;
        }

        $read = "select $sql from color where deleted =''$cond";
        $result = conn()->query($read);

        conn()->close();

        
        while($row = $result->fetch_assoc()){

            array_push($data,['id'=>$row['id'],'name'=>$row['name'],'created'=>$row['created'],'modified'=>$row['modified'],'deleted'=>$row['deleted']]);

        }


        return $data;

    }

    function delete_color($id){
        
        $t = time();
        $date = strval(date("d/m/Y h:m:s",$t));

        $sql = "update color set modified='$date', deleted='$date' where id=$id";

        if(conn()->query($sql) === true){

            header("Location: ../color");
        }else{

            echo "Error updating color : " .conn()->error;
        }
        conn()->close();

    }

    function update_color($data, $cond){
        
        $t = time();
        $date = strval(date("d/m/Y h:m:s",$t));

        $sql = "update color set name='$data',modified='$date' where id = $cond";

        if(conn()->query($sql) === true){

            header("Location: ../color");
        }else{

            echo "Error updating color : " .conn()->error;
        }
        conn()->close();


    }

<?php

    function select_seater($sql,$cond=""){

        $data = [];

        if($cond !=""){

            $cond = " and ".$cond;
        }

        $read = "select $sql from seater where deleted =''$cond";
        $result = conn()->query($read);

        conn()->close();

        
        while($row = $result->fetch_assoc()){

            array_push($data,['id'=>$row['id'],'name'=>$row['name'],'created'=>$row['created'],'modified'=>$row['modified'],'deleted'=>$row['deleted']]);

        }


        return $data;

    }

    function delete_seater($id){
        
        $t = time();
        $date = strval(date("d/m/Y h:m:s",$t));

        $sql = "update seater set modified='$date', deleted='$date' where id=$id";

        if(conn()->query($sql) === true){

            header("Location: ../seater");
        }else{

            echo "Error updating seater : " .conn()->error;
        }
        conn()->close();

    }

    function update_seater($data, $cond){
        
        $t = time();
        $date = strval(date("d/m/Y h:m:s",$t));

        $sql = "update seater set name='$data',modified='$date' where id = $cond";

        if(conn()->query($sql) === true){

            header("Location: ../seater");
        }else{

            echo "Error updating seater : " .conn()->error;
        }
        conn()->close();


    }

<?php

    function select_vendor($sql,$cond=""){

        $data = [];

        if($cond !=""){

            $cond = " and ".$cond;
        }

        $read = "select $sql from vendor where deleted =''$cond";
        $result = conn()->query($read);

        conn()->close();

        
        while($row = $result->fetch_assoc()){

            array_push($data,['id'=>$row['id'],'name'=>$row['name'],'country'=>$row['country'],'address'=>$row['address'],'created'=>$row['created'],'modified'=>$row['modified'],'deleted'=>$row['deleted']]);

        }


        return $data;

    }

    function delete_vendor($id){
        
        $t = time();
        $date = strval(date("d/m/Y h:m:s",$t));

        $sql = "update vendor set modified='$date', deleted='$date' where id=$id";

        if(conn()->query($sql) === true){

            header("Location: ../vendor");
        }else{

            echo "Error updating vendor : " .conn()->error;
        }
        conn()->close();

    }

    function update_vendor($data, $cond){
        
        $t = time();
        $date = strval(date("d/m/Y h:m:s",$t));

        $sql = "update vendor set name='$data',modified='$date' where id = $cond";

        if(conn()->query($sql) === true){

            header("Location: ../vendor");
        }else{

            echo "Error updating vendor : " .conn()->error;
        }
        conn()->close();


    }

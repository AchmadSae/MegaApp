<?php

    class db {

        private $server = "localhost";
        private $user = "root";
        private $pass = "";
        private $db = "ebonia";

        function conn(){
        
            $conn = mysqli_connect($this->server, $this->user, $this->pass, $this->db);

            if( !$conn ){

                return die("Connection failed: " . mysqli_connect_error());

            } else{

                return $conn;

            }


        }

        function close(){

            mysqli_close($this->conn());
        }

        function select($table,$query,$where=null,$value=null){

            $conn = $this->conn();
            $close = $this->close();
            $table = clean($table);
            $query = clean($query);
            $data =[];

            if(isset($where)){
                
                $where = clean($where);
                $value = clean($value);

                $sql = "select ".$query." from ".$table." where ".$where." = '$value' and deleted = ''";

            }else{

                $sql = "select ".$query." from ".$table." where deleted =''";

            }

            $result = mysqli_query($conn,$sql);

            $this->close();

            while( $row = mysqli_fetch_assoc($result)){

                $data[] = $row;
            }

            return $data;
        }

        function select_table($table,$query,$page,$where=null,$value=null){

            $conn = $this->conn();
            $close = $this->close();
            $table = clean($table);
            $query = clean($query);
            $p = ($page -1)*10;
            $data = [];

            if(isset($where)){
                
                $where = clean($where);
                $value = clean($value);

                $sql = "select ".$query." from ".$table." where ".$where." = '$value' and deleted = '' LIMIT $p,10";

            }else{

                $sql = "select ".$query." from ".$table." where deleted = '' LIMIT $p,10";

            }

            $result = mysqli_query($conn,$sql);

            $this->close();

            while( $row = mysqli_fetch_assoc($result)){

                $data[] = $row;
            }

            return $data;
        }

        function new($table,$query,$value){

            $conn = $this->conn();
            $close = $this->close();
            $table = clean($table);
            $query = clean($query);
            $value = clean($value);
            $val="";

            for($i=0 ; $i<count($value); $i++){

                if($i == count($value)-1){

                    $val .= "'$value[$i]'";
    
                }else{

                    $val .= "'$value[$i],'";
                }
            }

            $sql = "insert into ".$table."(".$query.") values( ".$val.")";

            if(mysqli_query($conn,$sql)){

                echo "New record created";
    
            }else {
    
                echo " Error: ". $sql."<br>".mysqli_error($conn);
    
            }
    
            $close;

        }

        function update($table,$query,$value,$where,$v){

            $conn = $this->conn();
            $close = $this->close();
            $table = clean($table);
            $query = clean($query);
            $value = clean($value);
            $where = clean($where);
            $v = clean($v);

            $sql = "update ".$table." set ";
            
            for($i = 0; $i < count($query); $i++){

                if($i == count($query)-1){

                    $sql .= $query[$i]." = '$value[$i]'";
                }else{

                    $sql .= $query[$i]." = '$value[$i]',";
                }
            }

            $sql .= "where ".$where." = '$v'";

            if(mysqli_query($conn,$sql)){

                echo "Record is updated";
    
            }else {
    
                echo "Error updating : " . mysqli_error($conn);
    
            }
    
            $close;
        }

        function delete($table,$where,$v){
            
            $conn = $this->conn();
            $close = $this->close();
            $table = clean($table);
            $where = clean($where);
            $v = clean($v);

            $sql = "delete from ".$table." where ".$where." = '$v'";

            if(mysqli_query($conn,$sql)){
    
                echo "Record is deleted";
    
            }else {
    
                echo "Error deleting record: ".mysqli_error($conn);
    
            }
    
            $close;

        }

    }

    function clean($data){

        $data = htmlspecialchars($data);
        $data = stripslashes($data);
        $data = trim($data);

        return $data;
    }
?>
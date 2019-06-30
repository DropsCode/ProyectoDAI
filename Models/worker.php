<?php

    class Worker{
        var $RUT;
        var $COD_PROFESSION; /* Consulta, faltará un NAME_PROFESSION  ?? */

        function __construct($data){
            $this->RUT = $data['RUT'];
            $this->COD_PROFESSION = $data['COD_PROFESSION'];
        }


        static function all_Worker(){
            $query = "SELECT RUT, COD_PROFESSION FROM WORKER;";
            $link = connect();
            $result = $link->query($query);
            $resp = array();

            while($row = $result->fetch_assoc()){
                $worker = new Worker($row);
                array_push($resp, $worker);
            }
            return $resp;
        }


        static function get_Worker($RUT){
            $query = "SELECT RUT, COD_PROFESSION FROM WORKER WHERE COD_PROFESSION=".$COD_PROFESSION.";";
            $link = connect();
            $result = $link->query($query);
            $resp = array();

            while($row = $result->fetch_assoc()){
                $worker = new Worker($row);
                array_push($resp, $worker);
            }
            return $resp[0];
        }

        
        function save(){
            $sql = "INSERT INTO worker (RUT, COD_PROFESSION)
                    VALUES ('".$this->RUT."', '".$this->COD_PROFESSION."')";
        
            $link = connect();
            if ($link->query($sql) === TRUE ){
                $COD_PROFESSION = mysqli_insert_id($link);
                $this->COD_PROFESSION = $COD_PROFESSION;
                return $this;
            } else {
                echo "Error: " . $sql . "<br>" . $link->error;
                return false;
            }
        }

        function delete(){
            $sql = "DELETE FROM worker WHERE COD_PROFESSION = ".$this->COD_PROFESSION.";";
            $link = connect();
            mysqli_query($link, $sql);
        }


        function update(){
            $sql = "UPDATE worker SET COD_PROFESSION='".$this->COD_PROFESSION."' WHERE COD_PROFESSION=".$this->COD_PROFESSION;
            $link = connect();
            mysqli_query($link, $sql);
        }
    }

?>
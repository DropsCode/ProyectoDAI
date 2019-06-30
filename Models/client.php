<?php

    class Client{
        var $RUT;

        function __construct($data){
            $this->RUT = $data['RUT'];
        }

        static function all_Client(){
            $query = "SELECT RUT FROM CLIENT;";
            $link = connect();
            $result = $link->query($query);
            $resp = array();

            while($row = $result->fetch_assoc()){
                $client = new Client($row);
                array_push($resp, $client);
            }
            return $resp;
        }


        static function get_Client($RUT){
            $query = "SELECT RUT FROM CLIENT WHERE RUT=".$RUT.";";
            $link = connect();
            $result = $link->query($query);
            $resp = array();

            while($row = $result->fetch_assoc()){
                $client = new Client($row);
                array_push($resp, $client);
            }
            return $resp[0];
        }


        function save(){
            $sql = "INSERT INTO client (RUT)
                    VALUES ('".$this->RUT."')";
        
            $link = connect();
            if ($link->query($sql) === TRUE ){
                $RUT = mysqli_insert_id($link);
                $this->RUT = $RUT;
                return $this;
            } else {
                echo "Error: " . $sql . "<br>" . $link->error;
                return false;
            }
        }


        function delete(){
            $sql = "DELETE FROM client WHERE RUT = ".$this->RUT.";";
            $link = connect();
            mysqli_query($link, $sql);
        }


        function update(){
            $sql = "UPDATE client SET RUT='".$this->RUT."' WHERE RUT=".$this->RUT;
            $link = connect();
            mysqli_query($link, $sql);
        }
    }

?>
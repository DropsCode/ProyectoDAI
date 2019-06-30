<?php

    class Commune{
        var $COD_COMUNNE;
        var $COD_NAME_COMM;

        function __construct($data) {
        $this->COD_COMUNNE = $data['COD_COMUNNE'];
        $this->COD_NAME_COMM = $data['COD_NAME_COMM'];
        }

        static function all_communes(){
            $query = "SELECT COD_COMUNNE, COD_NAME_COMM FROM COMMUNE;";
            $link = connect();
            $result = $link->query($query);
            $resp = array();

            while($row = $result->fetch_assoc()){
                $commune = new Commune($row);
                array_push($resp, $commune);
            }

            return $resp;
        }

        static function get_commune($COD_COMUNNE){
            $query = "SELECT COD_COMUNNE, COD_NAME_COMM FROM COMMUNE WHERE COD_COMUNNE=".$COD_COMUNNE.";";
            $link = connect();
            $result = $link->query($query);
            $resp = array();

        while($row = $result->fetch_assoc()) {
            $commune = new Commune($row);
            array_push($resp, $commune);
        }
           return $resp[0];
        }


        function save(){
            $sql = "INSERT INTO commune (COD_NAME_COMM) 
                    VALUES ('".$this->COD_NAME_COMM."')";
            $link = connect();
            if ($link->query($sql) === TRUE) {
                $COD_COMUNNE = mysqli_insert_id($link);
                $this->COD_COMUNNE = $COD_COMUNNE;
                return $this;
            } else {
                echo "Error: " . $sql . "<br>" . $link->error;
                return false;
            }
        }

        function delete(){
            $sql = "DELETE FROM commune WHERE COD_COMUNNE = ".$this->COD_COMUNNE.";";
            $link = connect();
            mysqli_query($link, $sql);
        }
    
        function update(){
            $sql = "UPDATE commune SET COD_NAME_COMM='".$this->COD_NAME_COMM."' WHERE COD_COMUNNE=".$this->COD_COMUNNE;
            $link = connect();
            mysqli_query($link, $sql);
        }

    }

?>
<?php

    class Professions{
        var $COD_PROFESSION;
        var $NAME_PROFESSION;

        function __construct($data) {
        $this->COD_PROFESSION = $data['COD_PROFESSION'];
        $this->NAME_PROFESSION = $data['NAME_PROFESSION'];
        }

        static function all_professions(){
            $query = "SELECT COD_PROFESSION, NAME_PROFESSION FROM professions;";
            $link = connect();
            $result = $link->query($query);
            $resp = array();

            while($row = $result->fetch_assoc()){
                $prof = new Professions($row);
                array_push($resp, $prof);
            }

            return $resp;
        }

        static function get_profession($COD_COMUNNE){
            $query = "SELECT * FROM professions WHERE COD_PROFESSION=".$COD_PROFESSION.";";
            $link = connect();
            $result = $link->query($query);
            $resp = array();

        while($row = $result->fetch_assoc()) {
            $prof = new Professions($row);
            array_push($resp, $prof);
        }
           return $resp[0];
        }

        function save(){
            $sql = "INSERT INTO professions (NAME_PROFESSION)
                    VALUES ('".$this->NAME_PROFESSION."')";
            
            $link = connect();
            if ($link->query($sql) === TRUE) {
                $id = mysqli_insert_id($link);
                $this->id = $id;
                return $this;
            } else {
                echo "Error: " . $sql . "<br>" . $link->error;
                return false;
            }
        }

        function delete(){
            $sql = "DELETE FROM professions where COD_PROFESSION = ".$this->COD_PROFESSION.";";
            $link = connect();
            mysqli_query($link, $sql);
        }
    
        function update(){
            $sql = "UPDATE professions SET COD_PROFESSION='".$this->COD_PROFESSION."' WHERE COD_PROFESSION=".$this->COD_PROFESSION;
            $link = connect();
            mysqli_query($link, $sql);
        }



    }

?>
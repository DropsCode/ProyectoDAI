<?php

    class User{
        var $RUT;
        var $DV;
        var $NAME;
        var $LAST_NAME;
        var $DIRECTION;
        var $COMMUNE;
        var $EMAIL;
        var $PASSWORD;
        var $TYPE_USER;
        var $RATING;

        function __construct($data){
            $this->RUT = $data['RUT'];
            $this->DV = $data['DV'];
            $this->NAME = $data['NAME'];
            $this->LAST_NAME = $data['LAST_NAME'];
            $this->DIRECTION = $data['DIRECTION'];
            $this->COMMUNE = $data['COMMUNE'];
            $this->EMAIL = $data['EMAIL'];
            $this->PASSWORD = $data['PASSWORD'];
            $this->TYPE_USER = $data['TYPE_USER'];
            $this->RATING = $data['RATING'];
        }

        static function all_users(){
            $query = "SELECT * FROM user;";
            $link = connect();
            $result = $link->query($query);
            $resp = array();

            while($row = $result->fetch_assoc()){
                $user = new User($row);
                array_push($resp, $user);
            }

            return $resp;
        }

        static function get_user($EMAIL){
            $query = "SELECT * FROM user WHERE EMAIL='".$EMAIL."';";
            echo $query;
            $link = connect();
            $result = $link->query($query);
            $resp = array();

            while($row = $result->fetch_assoc()) {
                $user = new User($row);
                array_push($resp, $user);
            }
           return $resp[0];
        }

        static function get_user_by_email($EMAIL){
            $query = "SELECT * FROM user WHERE EMAIL='".$EMAIL."'";
            $link = connect();
            $result = $link->query($query);
            $resp = array();

            while($row = $result->fetch_assoc()) {
                $user = new User($row);
                array_push($resp, $user);
            }
           return $resp[0];
        }


        function save(){
            $sql = "INSERT INTO user (RUT, DV, NAME, LAST_NAME, DIRECTION, COMMUNE, EMAIL, PASSWORD, TYPE_USER, RATING)
                    VALUES ('".$this->RUT."','".$this->DV."','".$this->NAME."','".$this->LAST_NAME."','".$this->DIRECTION."','".$this->COMMUNE."','".$this->EMAIL."','".$this->PASSWORD."','".$this->TYPE_USER."','".$this->RATING."')";

            $link = connect();
            if ($link->query($sql) === TRUE ){/*
                $RUT = mysqli_insert_id($link);
                $this->RUT = $RUT;*/
                return $this;
            } else {
                echo "Error: " . $sql . "<br>" . $link->error;
                return false;
            }
        }  
        
        function delete(){
            $sql = "DELETE FROM user WHERE RUT = ".$this->RUT.";";
            $link = connect();
            mysqli_query($link, $sql);
        }


        /*
        
        Tenemos que revisar qué vamos a actualizar para definir bien la consulta, y la función :P

        function update(){
            $sql = "UPDATE user SET RUT='".$this->RUT."' WHERE COD_COMUNNE=".$this->COD_COMUNNE;
            $link = connect();
            mysqli_query($link, $sql);
        }

        */


    }

?>
<?php

    class Work_orders{
        var $COD_ORDER;
        var $STATE_ORDER;
        var $DATE_ORDER;
        var $CLIENT_RUT;
        var $WORKER_RUT;

        function __construct($data){
            $this->COD_ORDER = $data['COD_ORDER'];
            $this->STATE_ORDER = $data['STATE_ORDER'];
            $this->$DATE_ORDER = $data['DATE_ORDER'];
            $this->CLIENT_RUT = $data['CLIENT_RUT'];
            $this->WORKER_RUT = $data['WORKER_RUT'];
        }


        static function all_Work_orders(){
            $query = "SELECT COD_ORDER, STATE_ORDER, DATE_ORDER, CLIENT_RUT, WORKER_RUT FROM WORK_ORDERS;";
            $link =connect();
            $result = $link->query($query);
            $resp = array();

            while($row = $result->ferch_assoc()){
                $work_orders = new Work_orders($row);
                array_push($resp, $work_orders);
            }
            return $resp;
        }


        static function get_Work_orders($COD_ORDER){
            $query = "SELECT COD_ORDER, STATE_ORDER, DATE_ORDER, CLIENT_RUT, WORKER_RUT FROM WORK_ORDERS WHERE COD_ORDER=".$COD_ORDER.";";
            $link = connect();
            $result = $link->query($query);
            $resp = array();

            while($row = $result->fetch_assoc()){
                $work_orders = new Work_orders($row);
                array_push($resp, $work_orders);
            }
            return $resp[0];
        }

        function save(){
            $sql = "INSERT INTO work_orders (COD_ORDER, STATE_ORDER, DATE_ORDER, CLIENT_RUT, WORKER_RUT)
                    VALUES ('".$this->COD_ORDER."','".$this->STATE_ORDER."','".$this->DATE_ORDER."','".$this->CLIENT_RUT."','".$this->WORKER_RUT."')";

            $link = connect();
            if ($link->query($sql) === TRUE ){
                $COD_ORDER = mysqli_insert_id($link);
                $this->COD_ORDER = $COD_ORDER;
                return $this;
            } else {
                echo "Error: " . $sql . "<br>" . $link->error;
                return false;
            }
        }        

        function delete(){
            $sql = "DELETE FROM work_orders WHERE COD_ORDER = ".$this->COD_ORDER.";";
            $link = connect();
            mysqli_queri($link, $sql);
        }

        function update(){
            $sql = "UPDATE work_orders SET COD_ORDER='".$this->COD_ORDER."' WHERE COD_ORDER=".$this->COD_RODER;
            $link = connect();
            mysqli_query($link, $sql);
        }

    }

?>
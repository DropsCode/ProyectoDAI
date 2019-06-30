<?php

    class Comments{
        var $ID_COMMENT;
        var $CLIENT_RUT;
        var $WORKER_RUT;
        var $COMMENTS;

        function __construct($data){
            $this->ID_COMMENT = $data['ID_COMMENT'];
            $this->CLIENT_RUT = $data['CLIENT_RUT'];
            $this->WORKER_RUT = $data['WORKER_RUT'];
            $this->COMMENTS = $data['COMMENTS'];
        }


        static function all_Comments(){
            $query = "SELECT ID_COMMENT, CLIENT_RUT, WORKER_RUT, COMMENTS FROM COMMENTS;";
            $link = connect();
            $result = $link->query($query);
            $resp = array();

            while($row = $result->fetch_assoc()){
                $comments = new Comments($row);
                array_push($resp, $comments);
            }

            return $resp;
        }


        static function get_Comments($ID_COMMENT){
            $query = "SELECT ID_COMMENT, CLIENT_RUT, WORKER_RUT, COMMENTS FROM COMMENTS WHERE ID_COMMENT=".$ID_COMMENT.";";
            $link = connect();
            $result = $link->query($query);
            $resp = array();

            while($row = $result->fetch_assoc()){
                $comments = new Comments($row);
                array_push($resp, $comments);
            }

            return $resp[0];
        }
        
        function save(){
            $sql = "INSERT INTO comments (ID_COMMENT, CLIENT_RUT, WORKER_RUT, COMMENTS) 
                    VALUES ('".$this->ID_COMMENT."','".$this->CLIENT_RUT."','".$this->WORKER_RUT."','".$this->COMMENTS."')";
        $link = connect();
            if ($link->query($sql) === TRUE) {
                $ID_COMMENT = mysqli_insert_id($link);
                $this->ID_COMMENT = $ID_COMMENT;
                return $this;
            }else {
                echo "Error: " . $sql . "<br>" . $link->error;
                return false;
            }
        }


        function delete(){
            $sql = "DELETE FROM comments WHERE ID_COMMENT = ".$this->ID_COMMENT.";";
            $link = connect();
            mysqli_query($link, $sql);
        }

        function update(){
            $sql = "UPDATE comments SET ID_COMMENT= '".$this->ID_COMMENT."' WHERE ID_COMMENT=".$this->ID_COMMENT;
            $link = connect();
            mysqli_query($link, $sql);
        }

    }

?>
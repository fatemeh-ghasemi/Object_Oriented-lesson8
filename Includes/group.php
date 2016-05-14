<?php

require 'connection.php';

class group {

    public function add_to_group($label) {

        global $database;
        $result = $database->query("SELECT * FROM group_type");
        $data = $result->fetch_all(MYSQLI_ASSOC);
        $size = count($data);
        $c = 0;

        foreach ($data as $v) {
            if ($v['label'] != $label)
                $c++;
            else {
                break;
            }
        }
        if ($c == $size) {
            $qry2 = "INSERT INTO group_type(label) VALUES ('$label')";
            $result2 = $database->query($qry2);
            header("location: group.php");
            exit();
        } else {
            echo 'This group is in my list.';
//            header("location: group.php");
//            exit();
        }
    }

    public function delete_from_group($id) {
        global $database;
        $result = $database->query("DELETE  FROM group_type WHERE id=$id");
        $result2 = $database->query("UPDATE book SET grouptype=0 WHERE id=$id");
        if ($result == false || $result2 == FALSE) {
            echo $database->error;
        }
    }

    public function update_group($name, $id) {
        global $database;
        $qry = "UPDATE group_type SET label='$name' WHERE id=$id ";
        $res = $database->query($qry);
    }

    public function get_data($id) {
        global $database;
        $result = $database->query("SELECT * FROM group_type WHERE id=$id ");
        $data = $result->fetch_assoc();
         if($data==FALSE){
            echo $database->error;
        }
        return $data;
    }

}

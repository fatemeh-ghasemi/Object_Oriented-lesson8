<?php

require 'connection.php';

class book {

    public function add_to_book($data) {
        $qry1 = "SELECT * FROM group_type";
        global $database;
        $result1 = $database->query($qry1);
        if ($result1 == false) {
            echo $database->error;
        }
        $data1 = $result1->fetch_all(MYSQLI_ASSOC);

        $id = "";
        foreach ($data1 as $v) {
            if ($v['label'] == $data['option'])
                $id = $v['id'];
        }
        $qry2 = "INSERT INTO book(fname, lname, phone, email, grouptype,mobilephone) VALUES "
                . "('$data[fname]','$data[lname]','$data[phone]','$data[email]','$id','$data[mobile]')";
        $result2 = $database->query($qry2);
    }

    public function delete_from_book($id) {
        global $database;
        $result = $database->query("DELETE  FROM book WHERE id=$id");
    }

    public function update_book($data2, $data) {
        global $database;
        $lid = 0;
        foreach ($data2 as $x) {
            if ($data['option'] == $x['label']) {
                $lid = $x['id'];
                break;
            }
        }
        $qry = "UPDATE book SET fname='$data[fname]',lname='$data[lname]',phone='$data[phone]',email='$data[email]',grouptype=$lid,mobilephone='$data[mobile]' WHERE id='$data[id]' ";
        $res = $database->query($qry);
    }

    public function search_from_book($fname, $lname) {
        global $database;
        $qry = "SELECT * FROM book WHERE fname LIKE'%$fname%' and lname LIKE'%$lname%'";
        $res = $database->query($qry);
        if ($res == false) {
            $data = null;
        }
        $data = $res->fetch_all(MYSQLI_ASSOC);
        return $data;
    }

    public function get_data($id,$cond,$flag) {
        global $database;
        $result = $database->query("SELECT * FROM book WHERE $cond=$id ");
        if($flag){
            $data = $result->fetch_assoc();
        }
        else{
            $data = $result->fetch_all(MYSQLI_ASSOC);
        }
        return $data;
    }

}

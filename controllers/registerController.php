<?php

class RegisterController {

    public function index($database, $table) {
        $query = mysqli_query($database, "SELECT * FROM $table");

        $result = [];
        if (mysqli_num_rows($query) > 0) {
            // output data menjadi array asosiatif
            while($row = mysqli_fetch_assoc($query)) {
                $result[] = $row;
            }
        }

        return $result;
    }

    public function detail($database ,$table, $id) {
        $query = mysqli_query($database, "SELECT * FROM $table WHERE id = $id");

        $result = mysqli_fetch_assoc($query);

        return $result;
    }

    public function register($database, $table, $payload, $redirect = 'dashboard') {
        // Using concate for field and value
        $querySql = "INSERT INTO  $table ( ";
        foreach($payload as $field => $value){
            $querySql.=" $field,";
        }
        $querySql = rtrim($querySql, ',');

        $querySql.= ') VALUES (';
        foreach($payload as $field => $value){
            $querySql.=" '$value',";
        }
        $querySql = rtrim($querySql, ',');
        $querySql.= ');';

        $create = mysqli_query($database, $querySql);
        
        if($create){
            unset($_POST);
            echo "<script> alert('data disimpan');document.location.href='?page=$redirect'</script>";
        } else {
            echo "<script> alert('data gagal disimpan');document.location.href='?page=$redirect'</script>";
        }
    }

    public function update($database, $table, $id, $payload, $redirect = 'registers') {

        $querySql = "UPDATE $table SET ";
        foreach($payload as $field => $value){
            $querySql .=" $field = '$value',";
        }
        $querySql = rtrim($querySql, ',');

        $querySql .= " WHERE id = $id";
        
        $update = mysqli_query($database, $querySql);

        if($update){
            unset($_POST);
            echo "<script> alert('data disimpan');document.location.href='?page=$redirect'</script>";
        } else {
            echo "<script> alert('data gagal disimpan');document.location.href='?page=$redirect'</script>";
        }
    }

    public function delete($database, $table, $id, $redirect) {
        
        $query = mysqli_query($database, "DELETE FROM $table WHERE id = $id");

        unset($_POST);
        echo "<script> alert('data berhasil dihapus');document.location.href='?page=$redirect'</script>";
    }
}
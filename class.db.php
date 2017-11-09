<?php
class CDataBase {
    private $HOSTNAME;
    private $USERNAME;
    private $PASSWORD;
    private $DATABASE;
    private $CONNECTION=null;
    public function __construct($new_host,$new_username,$new_password,$new_database) {
        $this->HOSTNAME=$new_host;
        $this->USERNAME=$new_username;
        $this->PASSWORD=$new_password;
        $this->DATABASE=$new_database;
        $this->CONNECTION=mysqli_connect($this->HOSTNAME,$this->USERNAME,$this->PASSWORD,$this->DATABASE);
    }
    public function Get_ID($table,$key,$value) { #get id from key/value
        $r=$this->CONNECTION->query("select id from `$table` where `$key`='$value'");
        if(!$r) return null;
        $data=$r->fetch_object();
        if(!isset($data)) return null;
        return $data->id;
    }

    public function Get_Row($table,$key,$value) {
        $r=$this->CONNECTION->query("select * from `$table` where `$key`='$value'");
        if(!$r) return null;
        $data=$r->fetch_object();
        if(!isset($data)) return null;
        return $data;
    }

    public function Query($query) {
        Log_Entry_From_Global($query);
        $r=$this->CONNECTION->query($query);
        return $r;
    }

    public function Set($table,$id,$key,$value) { #set key/value by id
        $value=$this->CONNECTION->real_escape_string($value);
        $q="update `$table` set `$key`='$value' where `id` ='$id';";
        $this->CONNECTION->query($q);
        Log_Entry_From_Global($q);
    }

    public function Insert($table,$kv_array) {
        $id=Generate_UUID();
        $qk=" `id` "; $qv=" '$id' ";
        foreach($kv_array as $key => $value) {
            $qk.= " ,`$key`";
            $qv.= " ,'$value'";
        }
        rtrim($qk,",");
        rtrim($qv,",");
        $q="INSERT into `$table`  ( $qk )  VALUES ( $qv );";
        print_r ($q);
        echo "\n";
        $this->CONNECTION->query($q);
        Log_Entry_From_Global($q);
    }
}

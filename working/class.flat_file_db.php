<?php



class FlatFileTable {
    public $filename;
    public $fields=array();
    function __construct($filename,$fields=null) {
      $this->filename = $filename;
      if($fields!=null) {
          $fields=$fields;
        }
    }
    
    function DeleteField($field) {
        
    }
    
    function AddField($field) {
    
    }
    
    function ExplodeLine($line) {

    }
    
    function DeleteID($id) {
        global $AUTH_FILE;
        $new_AUTH_FILE="$AUTH_FILE.tmp";
        $fp=fopen($AUTH_FILE,"r");
        if($fp) {
            $fo=fopen($new_AUTH_FILE,"w");
            if($fo) {
                while($line=fgets($fp)) {
                    $line=trim($line);
                    list($id)=explode(",",$line);
                    if($user!=$company) {
                        fwrite($fo,"$user,$pass,$access\n");
                    }
                }
                fclose($fo);
            }
            fclose($fp);
        }
        unlink($AUTH_FILE);
        rename($new_AUTH_FILE,$AUTH_FILE);
        //move($new_AUTH_FILE,$AUTH_FILE);
    }
}
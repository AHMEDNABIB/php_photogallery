<?php

class USer{
    public function find_all_user(){
       
        return self::find_this_query("SELECT * FROM users ");
     
    }

    public static function find_user_by_id($user_id){
        //global $database;
        // $result_set = $database->query("SELECT * FROM users Where id = $user_id ");
        $result_set = self:: find_this_query("SELECT * FROM users Where id = $user_id ");
        $found_user= mysqli_fetch_array($result_set);
        return $found_user;
    }
    public static function find_this_query($sql){
        global $database;
        $result_set = $database->query($sql);
        return $result_set;
    }



}
?>
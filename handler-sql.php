<?php

class HandlerSQL {

    public static function conMySQL() {
        return new mysqli("localhost", "vul",
            "pass", "vul");
    }

    public static function execSelect($query) {
        try {
            $con = self::conMySQL();
            $lResult = $con->query($query);
            return $lResult ? $lResult->fetch_assoc() : null;
        }
        catch (Exception $e) {
            
        }
    }

    public static function List_User($user, $pass) {
        $query = "select * from user where nick = '$user' and pass = '$pass'";
        if ($result = self::execSelect($query))
            return $result;
        return null;
    }

    public static function insert($query) {
        $con = self::conMySQL();
        $end = $con->query($query);
        $con->close();
        if ($end === true) { return true; }
        else { return false; }
	}
    
    public static function Update_Brute_Force($user) {
        $query = "update login set vezes = vezes+1 where user='$user'";
        if (self::insert($query)) {
            $query = "select vezes from login where user = '$user'";
            if ($result = self::execSelect($query))
                return $result["vezes"];
        }
        return false;
    }

    public static function Get_IP_By_User($user) {
        $query = "select cod from login where user = '$user'";
        if ($result = self::execSelect($query))
            return $result["cod"];
        self::Insert_IP_Login('', $user);
        $query = "select cod from login where user = '$user'";
        if ($result = self::execSelect($query))
            return $result["cod"];
        return null;
    }
    
    public static function Insert_IP_Login($ip, $user) {
        $query = "insert into login (ip, user) values ('$ip', '$user');";
        if (self::insert($query))
            return true;
        return false;
    }

    public static function Insert_Mesg_Chat($nick, $message) {
        $query = "insert into chat (nick, message, data) ".
            "values ('$nick', '$message', now());";
        if (self::insert($query))
            return true;
        return false;
    }
    
    public static function List_Messages($nick) {
        $query = "select * from chat where nick='$nick' limit 3";
        $con = self::conMySQL();
        $response = array();
        
        if ($result = $con->query($query)) {
            while ($row = $result->fetch_assoc()) {
                $temp_arr = array();
                foreach ($row as $key => $value ) {
                    $temp_arr[$key] = $value;
                }
                array_push($response, $temp_arr);
            }
        }
        return $response;
    }
    
}


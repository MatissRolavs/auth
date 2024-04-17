<?php

class Validator{

    static public function string($data, $min = 0 ,$max = INF) {

        $data = trim($data);

        return  is_string($data) 
                && strlen($data) > $min 
                && strlen($data) < $max;
    }
    static public function email($data) {

        return filter_var($data, FILTER_VALIDATE_EMAIL);
    }
    
}
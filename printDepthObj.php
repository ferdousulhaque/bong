<?php

class printDepthObjClass {

    /**
     * $data array
     * $level int
     * return int
     */
    public static function printDepth($data, $level = 0){
        try{
            foreach($data as $key=>$value){
                if(is_array($value) || is_object($value)){
                    if(is_array($value)){
                        echo $key." ".$level."\r\n";
                        self::printDepth($value, $level++);
                    }elseif(is_object($value)){
                        echo strtolower($key).": ".$level."\r\n";
                        self::printObjDepth($value,$level++);
                    }
                }else{
                    echo $key." ".(++$level)."\r\n";
                }
            }
            return !is_array($key)?$key:"1";
        }catch(Exception $ex){
            print_r($ex->getMessage());
        }
    }

    /**
     * $person Person
     * $level int
     */
    public static function printObjDepth($person, $level = 0): void{
        //print_r($person);die;
        try{
            $level++;
            foreach($person as $key=>$value){
                if(is_object($value)){
                    echo strtolower($key).": ".$level."\r\n";
                    self::printObjDepth($value, $level++);
                }else{
                    echo strtolower($key).": ".$level."\r\n";
                }
            }
        }catch(Exception $ex){
            print_r($ex->getMessage());
        }
    }
}

class Person {

    public $first_name;
    public $last_name;
    public $father;
    
    /**
     * $first_name string
     * $last_name string
     * $father string
     */
    public function __construct($first_name, $last_name, $father) {
        $this->first_name = $first_name;
        $this->last_name = $last_name;
        $this->father = $father;
    }
}
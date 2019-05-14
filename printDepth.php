<?php

class printDepthClass {

    /**
     * $data array
     * return mixed
     */
    public static function printDepth($data, $level = 0){
        try{
            foreach($data as $key=>$value){
                if(is_array($value)){
                    echo $key." ".$level."\r\n";
                    self::printDepth($value, $level++);
                }else{
                    echo $key." ".(++$level)."\r\n";
                }
            }
            return $key.$level;
        }catch(Exception $ex){
            print_r($ex->getMessage());
        }
    }
}
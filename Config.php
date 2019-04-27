<?php
namespace CodingLiki\Configs;

class Config{
    public static $config_folder = 'configs';

    public static function config($name){
        $arr = explode('.', $name);
        if(count($arr) < 2){
            $arr[1] = $arr[0];
        }
        $value = $arr[1];
        $file_name = $arr[0].'.php';
        //if(file_exists(ROOT."/".self::$config_folder."/$file_name")){
        if(file_exists("./".self::$config_folder."/$file_name")){
            //echo "Можем подключить конфиг";
            //include ROOT."/".self::$config_folder."/$file_name";
            include "./".self::$config_folder."/$file_name";
        }
        if(isset($$value)){
            //echo "$value установлен";
            return $$value;
        }
    }
}

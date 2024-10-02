<?php

namespace CodingLiki\Configs;

class Config
{
    public static function read(string $name, string $rootDirectory = __DIR__ . '/../../../config'): mixed
    {
        if(!str_contains($name, '.')){
            $name = "$name.$name";
        }
        [$fileName, $valueName] = explode('.', $name);

        $filePath = $rootDirectory . '/' . $fileName . '.php';

        if (file_exists($filePath)) {
            $returnedValue = include $filePath;
        }

        if (isset($$valueName)) {
            return $$valueName;
        }

        return $returnedValue;
    }
}

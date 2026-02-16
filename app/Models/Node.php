<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Node extends Model
{
    protected $fillable = ['xfields'];

     // Метод для добавления или обновления xfields
     public function setXField($fieldName, $fieldValue)
     {
         $xfieldsArray = $this->getXFieldsArray();
 
         $xfieldsArray[$fieldName] = $fieldValue;
 
         $this->xfields = $this->convertArrayToXFieldsString($xfieldsArray);
         $this->save();
     }

     // Метод для получения значения xfields
    public function getXField($fieldName)
    {
        $xfieldsArray = $this->getXFieldsArray();

        return $xfieldsArray[$fieldName] ?? null;
    }


    // Метод для преобразования строки xfields в массив
    protected function getXFieldsArray()
    {
        $xfieldsArray = [];

        if ($this->xfields) {
            $fields = explode('||', $this->xfields);
            foreach ($fields as $field) {
                list($key, $value) = explode('|', $field);
                $xfieldsArray[$key] = $value;
            }
        }

        return $xfieldsArray;
    }


    // Метод для преобразования массива в строку xfields
    protected function convertArrayToXFieldsString($xfieldsArray)
    {
        $xfieldsString = [];

        foreach ($xfieldsArray as $key => $value) {
            $xfieldsString[] = "{$key}|{$value}";
        }

        return implode('||', $xfieldsString);
    }

    

}

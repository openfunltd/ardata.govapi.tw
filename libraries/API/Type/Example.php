<?php

class API_Type_Example extends API_Type
{
    public static function getTypeSubject()
    {
        return '範例資料';
    }

    public static function getFilterFieldsInfo(): array
    {
        return [];
    }

    public static function getIdFieldsInfo()
    {
        return [
            '_id' => [
            ],
        ];
    }

    public static function getFieldMap()
    {
        return [
        ];
    }

    public static function aggMap()
    {
        return [
        ];
    }

    public static function queryFields()
    {
        return [
            '範例欄位',
        ];
    }


    public static function sortFields()
    {
        return [
        ];
    }

    public static function getRelations()
    {
        return [];
    }
}

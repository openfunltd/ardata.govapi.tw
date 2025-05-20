<?php

class API_Type_Election extends API_Type
{
    public static function getTypeSubject()
    {
        return '選舉';
    }

    public static function getFilterFieldsInfo(): array
    {
        return [
            '選舉年度' => [
                'es_field' => 'electionYear',
                'description' => '紀年標準為民國年',
                'type' => 'integer',
            ],
            '選舉名稱' => [
                'es_field' => 'electionName.keyword',
                'type' => 'text',
            ],
            '申報序號' => [
                'es_field' => 'yearOrSerial',
                'description' => '首次為 1, 第一次賸餘為 2，接下來之後第 n 次為 n+1',
                'type' => 'integer',
            ],
            '縣市別' => [
                'es_field' => 'electionArea.keyword',
                'type' => 'text',
            ],
        ];
    }

    public static function getIdFieldsInfo()
    {
        return [
            'id' => [
                'path_name' => 'id',
                'type' => 'string',
                'example' => 'election-113071504-113303-area-66000-2420701859b9417188f82d19fa625968',
            ],
        ];
    }

    public static function getFieldMap()
    {
        return [
            'path' => 'id',
            'electionYear' => '選舉年度',
            'electionName' => '選舉名稱',
            'electionArea' => '縣市別',
            'yearOrSerial' => '申報序號',
        ];
    }

    public static function aggMap()
    {
        return [
            '選舉年度' => ['election', ['選舉年度']],
            '選舉名稱' => ['election', ['選舉名稱']],
            '縣市別' => ['election', ['縣市別']],
            '申報序號' => ['election', ['申報序號']],
        ];
    }

    public static function queryFields()
    {
        return [
            '',
        ];
    }


    public static function sortFields()
    {
        return [
            '選舉年度',
        ];
    }

    public static function getRelations()
    {
        return [];
    }
}

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
                'description' => '選舉的民國年度 [例: 113]',
                'type' => 'integer',
            ],
            '選舉名稱' => [
                'es_field' => 'electionName.keyword',
                'description' => '選舉的名稱 [例: 113年總統、副總統選舉]',
                'type' => 'text',
            ],
            '申報序號' => [
                'es_field' => 'yearOrSerial',
                'description' => '申報序號 [例: 1]',
                'type' => 'integer',
            ],
            '縣市別' => [
                'es_field' => 'electionArea.keyword',
                'description' => '選舉的縣市別 [例: 臺中市]',
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
            'yearOrSerial' => '申報序號',
            'electionYear' => '選舉年度',
            'electionArea' => '縣市別',
            'electionName' => '選舉名稱',
        ];
    }

    public static function aggMap()
    {
        return [
            '選舉年度' => ['election', ['選舉年度']]
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

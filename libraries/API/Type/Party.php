<?php

class API_Type_Party extends API_Type
{
    public static function getTypeSubject()
    {
        return '政黨';
    }

    public static function getFilterFieldsInfo(): array
    {
        return [
            '名稱' => [
                'es_field' => 'name.keyword',
                'type' => 'text',
            ],
            '政黨編號' => [
                'es_field' => 'politicalPartyCode.keyword',
                'description' => '由於此資料集視不同申報年度為不同的資料，所以此欄位並非唯一值（unique）',
                'type' => 'text',
            ],
            '帳號' => [
                'es_field' => 'accountNumber.keyword',
                'description' => '由於此資料集視不同申報年度為不同的資料，所以此欄位並非唯一值（unique）',
                'type' => 'text',
            ],
            '申報年度' => [
                'es_field' => 'yearOrSerial',
                'description' => '紀年標準為民國年',
                'type' => 'integer',
            ],
        ];
    }

    public static function getIdFieldsInfo()
    {
        return [
            'id' => [
                'path_name' => 'id',
                'type' => 'string',
                'example' => 'political party-113080803-1091800451-40975a0bec3c44ec93eb08f7e878749b',
            ],
        ];
    }

    public static function getFieldMap()
    {
        return [
            'path' => 'id',
            'name' => '名稱',
            'politicalPartyCode' => '政黨編號',
            'accountNumber' => '帳號', 
            'yearOrSerial' => '申報年度',
        ];
    }

    public static function aggMap()
    {
        return [
            '名稱',
            '政黨編號',
            '帳號',
            '申報年度',
        ];
    }

    public static function queryFields()
    {
        return [
            '名稱',
            '政黨編號',
            '帳號',
        ];
    }

    public static function outputFields()
    {
        return [
            'id',
            '名稱',
            '政黨編號',
            '帳號',
            '申報年度',
            'downloadPdf',
            'downloadCsv',
            'downloadZip',
        ];
    }

    public static function sortFields()
    {
        return [
            '申報年度',
        ];
    }

    public static function getRelations()
    {
        return [
            'records' => [
                'type' => 'record',
                'map' => [
                    'id' => 'party_id',
                ],
                'subject' => '政黨相關政治獻金紀錄',
            ],
        ];
    }
}

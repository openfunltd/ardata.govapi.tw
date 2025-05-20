<?php

class API_Type_Account extends API_Type
{
    public static function getTypeSubject()
    {
        return '專戶';
    }

    public static function getFilterFieldsInfo(): array
    {
        return [
            '擬參選人姓名' => [
                'es_field' => 'name.keyword',
                'type' => 'text',
            ],
            '帳號' => [
                'es_field' => 'accountNumber.keyword',
                'description' => '由於申報次數可以超過一次以上，所以此欄位並非唯一值（unique）',
                'type' => 'text',
            ],
            '選舉名稱' => [
                'es_field' => 'electionName.keyword',
                'type' => 'text',
            ],
            '選舉年度' => [
                'es_field' => 'electionYear',
                'description' => '紀年標準為民國年',
                'type' => 'integer',
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
                'example' => 'account-114041003-1141800035-5a69ce6f3011412bb343a27861d00ed1',
            ],
        ];
    }

    public static function getFieldMap()
    {
        return [
            'path' => 'id',
            'accountNumber' => '帳號',
            'name' => '擬參選人姓名',
            'electionYear' => '選舉年度',
            'electionName' => '選舉名稱',
            'electionArea' => '縣市別',
            'yearOrSerial' => '申報序號',
        ];
    }

    public static function aggMap()
    {
        return [
            '帳號' => ['account', ['帳號']],
            '擬參選人姓名' => ['account', ['擬參選人姓名']],
            '選舉年度' => ['account', ['選舉年度']],
            '選舉名稱' => ['account', ['選舉名稱']],
            '縣市別' => ['account', ['縣市別']],
            '申報序號' => ['account', ['申報序號']],
        ];
    }

    public static function queryFields()
    {
        return [
            '帳號',
            '擬參選人姓名',
            '選舉年度',
            '選舉名稱',
            '縣市別',
        ];
    }

    public static function outputFields()
    {
        return [
            'id',
            '帳號',
            '擬參選人姓名',
            '選舉年度',
            '選舉名稱',
            '縣市別',
            '申報序號',
            'downloadPdf',
            'downloadCsv',
            'downloadZip',
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
        return [
            'records' => [
                'type' => 'record',
                'map' => [
                    'id' => 'account_id',
                ],
                'subject' => '專戶相關政治獻金紀錄',
            ],
        ];
    }
}

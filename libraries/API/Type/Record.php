<?php

class API_Type_Record extends API_Type
{
    public static function getTypeSubject()
    {
        return '政治獻金';
    }

    public static function getFilterFieldsInfo(): array
    {
        return [
            'election_id' => [
                'es_field' => 'electionPath.keyword',
                'type' => 'text',
            ],
            'account_id' => [
                'es_field' => 'accountPath.keyword',
                'type' => 'text',
            ],
            'party_id' => [
                'es_field' => 'partyPath.keyword',
                'type' => 'text',
            ],
            '擬參選人/政黨' => [
                'es_field' => 'name.keyword',
                'type' => 'text',
            ],
            '參選公職名稱' => [
                'es_field' => 'electionName.keyword',
                'type' => 'text',
            ],
            '申報序號/年度' => [
                'es_field' => 'yearOrSerial',
                'description' => '政黨相關紀錄時是年度，紀年標準為民國年；其餘紀錄時為序號，首次為 1, 第一次賸餘為 2，接下來之後第 n 次為 n+1',
                'type' => 'integer',
            ],
            '交易日期' => [
                'es_field' => 'transactionDate',
                'type' => 'date',
            ],
            '收支科目代碼' => [
                'es_field' => 'typeCode.keyword',
                'type' => 'text',
            ],
            '收支科目' => [
                'es_field' => 'type.keyword',
                'type' => 'text',
            ],
            '捐贈者/支出對象' => [
                'es_field' => 'donor.keyword',
                'type' => 'text',
            ],
            '身分證/統一編號' => [
                'es_field' => 'donorIdentifier.keyword',
                'type' => 'text',
            ],
            '收入金額' => [
                'es_field' => 'receivedAmount.keyword',
                'type' => 'text',
            ],
            '支出金額' => [
                'es_field' => 'donationAmount.keyword',
                'type' => 'text',
            ],
            '捐贈方式' => [
                'es_field' => 'payType.keyword',
                'type' => 'text',
            ],
            '存入專戶日期' => [
                'es_field' => 'saveAccountDate',
                'type' => 'date',
            ],
            '返還/繳庫' => [
                'es_field' => 'returnOrPaytrs.keyword',
                'type' => 'text',
            ],
            '支出用途' => [
                'es_field' => 'donationUser.keyword',
                'type' => 'text',
            ],
            '金錢類' => [
                'es_field' => 'isMoney',
                'type' => 'boolean',
            ],
            '地址' => [
                'es_field' => 'donorAddress.keyword',
                'type' => 'text',
            ],
            '聯絡電話' => [
                'es_field' => 'tel.keyword',
                'type' => 'text',
            ],
            '應揭露之支出對象' => [
                'es_field' => 'exposeRemark.keyword',
                'type' => 'text',
            ],
            '更正註記' => [
                'es_field' => 'diffVersionStr.keyword',
                'type' => 'text',
            ],
            '資料更正日期' => [
                'es_field' => 'updateDatetimeB',
                'type' => 'date',
            ],
            '支出對象之內部人員姓名' => [
                'es_field' => 'rpIntraName.keyword',
                'type' => 'text',
            ],
            '支出對象之內部人員職稱' => [
                'es_field' => 'rpIntraTitle.keyword',
                'type' => 'text',
            ],
            '政黨之內部人員姓名' => [
                'es_field' => 'rpPartyName.keyword',
                'type' => 'text',
            ],
            '政黨之內部人員職稱' => [
                'es_field' => 'rpPartyTitle.keyword',
                'type' => 'text',
            ],
            '關係' => [
                'es_field' => 'rpRelationStr.keyword',
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
                'example' => '',
            ],
        ];
    }

    public static function getFieldMap()
    {
        return [
            'id' => 'id',
            'electionPath' => 'election_id',
            'accountPath' => 'account_id',
            'partyPath' => 'party_id',
            'name' => '擬參選人/政黨',
            'electionName' => '參選公職名稱',
            'yearOrSerial' => '申報序號/年度',
            'transactionDate' => '交易日期',
            'typeCode' => '收支科目代碼',
            'type' => '收支科目',
            'donor' => '捐贈者/支出對象',
            'donorIdentifier' => '身分證/統一編號',
            'receivedAmount' => '收入金額',
            'donationAmount' => '支出金額',
            'payType' => '捐贈方式',
            'saveAccountDate' => '存入專戶日期',
            'returnOrPaytrs' => '返還/繳庫',
            'donationUse' => '支出用途',
            'isMoney' => '金錢類',
            'donorAddress' => '地址',
            'tel' => '聯絡電話',
            'exposeRemark' => '應揭露之支出對象',
            'diffVersionStr' => '更正註記',
            'updateDatetimeB' => '資料更正日期',
            'rpIntraName' => '支出對象之內部人員姓名',
            'rpIntraTitle' => '支出對象之內部人員職稱',
            'rpPartyName' => '政黨之內部人員姓名',
            'rpPartyTitle' => '政黨之內部人員職稱',
            'rpRelationStr' => '關係',
        ];
    }

    public static function aggMap()
    {
        return [
            'election_id' => ['record', ['election_id']],
            'account_id' => ['record', ['account_id']],
            'parth_id' => ['record', ['path_id']],
            '擬參選人/政黨' => ['record', ['擬參選人/政黨']],
            '參選公職名稱' => ['record', ['參選公職名稱']],
            '申報序號/年度' => ['record', ['申報序號/年度']],
            '交易日期' => ['record', ['交易日期']],
            '收支科目代碼' => ['record', ['收支科目代碼']],
            '收支科目' => ['record', ['收支科目']],
            '捐贈者/支出對象' => ['record', ['捐贈者/支出對象']],
            '身分證/統一編號' => ['record', ['身分證/統一編號']],
            '收入金額' => ['record', ['收入金額']],
            '支出金額' => ['record', ['支出金額']],
            '捐贈方式' => ['record', ['捐贈方式']],
            '存入專戶日期' => ['record', ['存入專戶日期']],
            '返還/繳庫' => ['record', ['返還/繳庫']],
            '支出用途' => ['record', ['支出用途']],
            '金錢類' => ['record', ['金錢類']],
            '地址' => ['record', ['地址']],
            '聯絡電話' => ['record', ['聯絡電話']],
            '應揭露之支出對象' => ['record', ['應揭露之支出對象']],
            '更正註記' => ['record', ['更正註記']],
            '資料更正日期' => ['record', ['資料更正日期']],
            '支出對象之內部人員姓名' => ['record', ['支出對象之內部人員姓名']],
            '支出對象之內部人員職稱' => ['record', ['支出對象之內部人員職稱']],
            '政黨之內部人員姓名' => ['record', ['政黨之內部人員姓名']],
            '政黨之內部人員職稱' => ['record', ['政黨之內部人員職稱']],
            '關係' => ['record', ['關係']],
        ];
    }

    public static function queryFields()
    {
        return [
            '擬參選人/政黨',
            '參選公職名稱',
            '申報序號/年度',
            '收支科目',
            '捐贈者/支出對象',
            '身分證/統一編號',
            '捐贈方式',
            '返還/繳庫',
            '支出用途',
            '地址',
            '聯絡電話',
            '支出對象之內部人員姓名',
            '支出對象之內部人員職稱',
            '政黨之內部人員姓名',
            '政黨之內部人員職稱',
            '關係',
        ];
    }

    public static function sortFields()
    {
        return [
            '交易日期',
        ];
    }

    public static function getRelations()
    {
        return [];
    }
}

<?php
namespace App\Api;
class HtmlHelper
{
    /*
     * コンストラクタ
     */
    public function __construct() {}
    /*
     * 空有りの選択肢を取得する
     * @param string $bunrui
     * 
     * @return $list 空有り選択肢
     */
    public function getJsonKara($bunrui)
    {    
        $result[] = [
            'id'    => '',
            'value' => '',
        ];
        $result[] = [
            'id'    => '1',
            'value' => 'サラダ',
        ];
        $result[] = [
            'id'    => '2',
            'value' => 'おつまみ',
        ];
        $result[] = [
            'id'    => '3',
            'value' => '焼き物',
        ];
        $result[] = [
            'id'    => '4',
            'value' => '麺／ご飯',
        ];
        $result[] = [
            'id'    => '5',
            'value' => '新品',
        ];
        $result[] = [
            'id'    => '6',
            'value' => 'スープ',
        ];
        $result[] = [
            'id'    => '7',
            'value' => 'デザート',
        ];
        $result[] = [
            'id'    => '8',
            'value' => 'ドリンク',
        ];
        return json_encode($result, JSON_UNESCAPED_UNICODE);
    }
    /*
     * 空なしの選択肢を取得する
     * @param string $bunrui
     * 
     * @return $list 空有り選択肢
     */
    public function getJson($bunrui)
    {
        return json_encode($result, JSON_UNESCAPED_UNICODE);
    }
    public function getTableNos()
    {
        $result[] = [
            'id'    => '',
            'value' => '',
        ];
        for ($i=1; $i <= 20; $i++) { 
            $result[] = [
                'id'    => $i,
                'value' => $i,
            ];
        }
        return json_encode($result, JSON_UNESCAPED_UNICODE);
    }
}
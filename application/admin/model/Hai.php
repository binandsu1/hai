<?php

namespace app\admin\model;

use think\Model;


class Hai extends Model
{

    

    

    // 表名
    protected $name = 'hai';
    
    // 自动写入时间戳字段
    protected $autoWriteTimestamp = false;

    // 定义时间戳字段名
    protected $createTime = false;
    protected $updateTime = false;
    protected $deleteTime = false;

    // 追加属性
    protected $append = [
        'work_text'
    ];
    

    
    public function getWorkList()
    {
        return ['老师' => __('老师'), '程序员' => __('程序员'), '公主' => __('公主')];
    }


    public function getWorkTextAttr($value, $data)
    {
        $value = $value ? $value : (isset($data['work']) ? $data['work'] : '');
        $list = $this->getWorkList();
        return isset($list[$value]) ? $list[$value] : '';
    }




}

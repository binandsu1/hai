<?php

namespace app\admin\validate;

use think\Validate;

class Hai extends Validate
{
    /**
     * 验证规则
     */
    protected $rule = [
        'name' => 'require',
    ];
    /**
     * 提示消息
     */
    protected $message = [
        'name.format' => '最小三个字符'
    ];
    /**
     * 验证场景
     */
    protected $scene = [
        'add'  => ['username'],
        'edit' => ['username'],
    ];
    
}

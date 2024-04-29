<?php
// +----------------------------------------------------------------------
// | 用户模型
// +----------------------------------------------------------------------
// | Copyright (c) 2020-2023 http://www.hkcms.cn, All rights reserved.
// +----------------------------------------------------------------------
// | Author: 广州恒企教育科技有限公司 <admin@hkcms.cn>
// +----------------------------------------------------------------------

declare (strict_types=1);

namespace app\common\dao\user;

use app\common\dao\BaseDao;
use app\common\model\user\User;

class UserDao extends BaseDao
{
    /**
     * 设置模型
     * @return string
     */
    protected function setModel(): string
    {
        return User::class;
    }
}
<?php
/**
 * Created by PhpStorm.
 * User: Administrator
 * Date: 2018-7-6
 * Time: 16:49
 */

namespace DesignPattern\Behaviour\Responsibility;


class ProductManagerLeader extends AbstarctLeader
{
    /**
     * 审批
     * @param $dayNums
     */
    public function approval($dayNums)
    {
        if($dayNums <= 2)
        {
            echo  "产品经理批准两天的假期".PHP_EOL;
        }
        else
        {
            echo  "产品经理审批不了，请找部门经理".PHP_EOL;
        }
        if (!is_null($this->nextLeader)) {
            $this->nextLeader->approval($dayNums);
        }
    }

}
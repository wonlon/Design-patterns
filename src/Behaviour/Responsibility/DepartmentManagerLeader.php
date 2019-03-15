<?php
/**
 * Created by PhpStorm.
 * User: Administrator
 * Date: 2018-7-6
 * Time: 16:49
 */

namespace DesignPattern\Behaviour\Responsibility;


class DepartmentManagerLeader extends AbstarctLeader
{
    /**
     * 审批
     * @param $dayNums
     */
    public function approval($dayNums)
    {
        if($dayNums <= 5)
        {
            echo  "部门经理批准五天的假期".PHP_EOL;
        }
        else
        {
            echo  "部门经理审批不了,你可以离职了".PHP_EOL;
        }
        if (!is_null($this->nextLeader)) {
            $this->nextLeader->approval($dayNums);
        }
    }

}
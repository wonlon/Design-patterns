<?php
/**
 * Created by PhpStorm.
 * User: Administrator
 * Date: 2018-7-6
 * Time: 16:49
 */

namespace DesignPattern\Behaviour\Responsibility;


class ProjectManagerLeader extends AbstarctLeader
{
    public function approval($dayNums)
    {
        if($dayNums <= 1)
        {
            echo  "项目经理批准一天的假期".PHP_EOL;
        }
        else
        {
            echo  "项目经理审批不了，请找产品经理".PHP_EOL;
        }
        if (!is_null($this->nextLeader)) {
            $this->nextLeader->approval($dayNums);
        }
    }

}
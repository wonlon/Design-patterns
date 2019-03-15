<?php
/**
 * Created by PhpStorm.
 * User: Administrator
 * Date: 2018-7-6
 * Time: 16:44
 */

namespace DesignPattern\Behaviour\Responsibility;


abstract class AbstarctLeader
{
    /**
     * 下一个领导
     * @var
     */
    protected $nextLeader;

    /**
     * 设置下一个领导
     * @param AbstarctLeader $leader
     * @return AbstarctLeader
     */
    public function setNextLeader(AbstarctLeader $leader)
    {
        $this->nextLeader = $leader;
        return $leader;
    }

    /**
     * 请假几天
     * @param $dayNums
     */
    abstract public function approval($dayNums);
}
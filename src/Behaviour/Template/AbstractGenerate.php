<?php
/**
 * 请完善PHP文件备注
 * PHP VERSION 7
 *
 * @category VNNOX-PHP
 * @package  NovaStar\Vnnox
 * @author   李磊磊 <kinddylee@gmail.com>
 * @license  http://www.apache.org/licenses/LICENSE-2.0.html Apache Public License
 * @link     http://www.vnnox.com/
 * @time     2018/11/22 4:37 PM
 */

namespace DesignPattern\Behaviour\Template;


/**
 * Class [AbstractGenerate]
 * 1.请描述类的功能
 * 2.请描述类的依赖
 * 3.请描述已知缺陷
 * 4.修改历史:
 *   修改人 + 日期 + 简单说明
 *
 * @category VNNOX-PHP
 * @package  DesignPattern\Behaviour\Template
 * @author   李磊磊 <kinddylee@gmail.com>
 * @license  http://www.apache.org/licenses/LICENSE-2.0.html Apache Public License
 * @link     http://www.vnnox.com/ (如果类中有相关引用,请修改此联系,如果有多个引用则添加多个`@link`)
 */
abstract class AbstractGenerate
{
    static $test = 0;
    /**
     * Function:displaySolution
     * 生成显示屏解决方案
     *
     * @return mixed
     */
    abstract protected function displaySolution();

    /**
     * Function:playSolution
     * 播放解决方案
     *
     * @return mixed
     */
    abstract protected function playSolution();

    /**
     * Function:playlistSolution
     * 播放清单解决方案
     *
     * @return mixed
     */
    abstract protected function playlistSolution();

    /**
     * Function:scheduleSolution
     * 排期解决方案
     *
     * @return mixed
     */
    abstract protected function scheduleSolution();

    /**
     * Function:planSolution
     * 资源信息
     *
     * @return mixed
     */
    abstract protected function planSolution();

    /**
     * Function:generate
     * 生成协议
     *
     * @return void
     */
    public function generate()
    {
        $this->displaySolution();
        $this->playSolution();
        $this->playlistSolution();
        $this->scheduleSolution();
        $this->planSolution();
    }
}
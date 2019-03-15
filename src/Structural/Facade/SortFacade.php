<?php
/**
 * Created by PhpStorm.
 * User: Administrator
 * Date: 2018-5-22
 * Time: 9:23
 */

namespace DesignPattern\Structural\Facade;


class SortFacade
{
    /**
     * 子清单对象
     * @var SubPlaylist
     */
    private $subPlaylist;
    /**
     * 父清单对象
     * @var FatherPlaylist
     */
    private $fatherPlaylist;
    /**
     * 排序对象
     * @var SortAlgorithm
     */
    private $sortAlgorithm;

    /**
     * SortFacade constructor.
     * @param SubPlaylist $subPlaylist
     * @param FatherPlaylist $fatherPlaylist
     * @param SortAlgorithm $sortAlgorithm
     */
    public function __construct(
        SubPlaylist $subPlaylist,
        FatherPlaylist $fatherPlaylist,
        SortAlgorithm $sortAlgorithm)
    {
        $this->subPlaylist = $subPlaylist;
        $this->fatherPlaylist = $fatherPlaylist;
        $this->sortAlgorithm = $sortAlgorithm;
    }

    /**
     * 对清单进行排序
     * @return string
     */
    public function sortPlaylist()
    {
        $subPlaylist = new  SubPlaylist();
        $subPlid = $subPlaylist->getSubPlaylistId();
        $subTime = $subPlaylist->getSubPlaylistDurationTime();

        $fatherPlaylist = new  FatherPlaylist();
        $fatherItemInfo = $fatherPlaylist->getFatherItemCount($subPlid);
        $fatherTime = $fatherPlaylist->getFatherPlaylistDurationTime($subTime);

        $sortAlgorithm = new  SortAlgorithm();
        return $sortAlgorithm->sortPlaylist($fatherTime, $fatherItemInfo);
    }
}
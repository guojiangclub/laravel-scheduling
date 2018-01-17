<?php

/*
 * This file is part of ibrand/laravel-scheduling.
 *
 * (c) iBrand <https://www.ibrand.cc>
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 */

namespace iBrand\Scheduling;

/**
 * Class ScheduleList
 * @package iBrand\Scheduling\Schedule
 */
class ScheduleList
{
    /**
     * @var array
     */
    protected $list;

    /**
     * ScheduleList constructor.
     */
    public function __construct()
    {
        $this->list = [];
    }

    /**
     * @param $class
     */
    public function add($class)
    {
        array_push($this->list, $class);
    }

    /**
     * @return array
     */
    public function get()
    {
        return $this->list;
    }
}

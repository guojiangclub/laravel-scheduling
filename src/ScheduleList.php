<?php

/*
 * This file is part of ibrand/laravel-scheduling.
 *
 * (c) iBrand <https://www.ibrand.cc>
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 */

namespace iBrand\Scheduling\Schedule;

class ScheduleList
{
    protected $list;

    public function __construct()
    {
        $this->list = [];
    }

    public function add($class)
    {
        array_push($this->list, $class);
    }

    public function get()
    {
        return $this->list;
    }
}

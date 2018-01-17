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

/**
 * Interface ScheduleContract.
 */
interface ScheduleContract
{
    /**
     * @return mixed
     */
    public function schedule();
}

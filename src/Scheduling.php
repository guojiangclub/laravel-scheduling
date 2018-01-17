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

use Illuminate\Console\Scheduling\Schedule;

/**
 * Class Scheduling.
 */
abstract class Scheduling implements ScheduleContract
{
    /**
     * @var Schedule
     */
    protected $schedule;

    /**
     * Scheduling constructor.
     *
     * @param Schedule $schedule
     */
    public function __construct(Schedule $schedule)
    {
        $this->schedule = $schedule;
    }
}

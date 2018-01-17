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
use Illuminate\Contracts\Foundation\Application;

/**
 * Class ScheduleHandle.
 */
class ScheduleHandle
{
    /**
     * @var Application
     */
    private $app;

    /**
     * ScheduleHandle constructor.
     *
     * @param Application $app
     */
    public function __construct(Application $app)
    {
        $this->app = $app;
        $this->app->booted(function () {
            $this->defineConsoleSchedule();
        });
    }

    public function defineConsoleSchedule()
    {
        $this->app->instance(
            Schedule::class, $scheduling = new Schedule()
        );
        $this->schedule($scheduling);
    }

    /**
     * @param Schedule $schedule
     */
    public function schedule(Schedule $schedule)
    {
        $scheduleList = $this->app->make(ScheduleList::class);

        foreach ($scheduleList->get() as $class) {
            $instance = new $class($schedule);
            $instance->schedule();
        }
    }
}

### Installation

```sh
$ composer require ibrand/laravel-scheduling -vvv
```

If your Laravel version below 5.5, you need add  the follow line to the section `providers` of `config/app.php`:

```sh
iBrand\Scheduling\ServiceProvider::class,
```

### Usage

#### extend Scheduling abstract class

```php

use iBrand\Scheduling\Scheduling;

class YourSchedule extends Scheduling {

    public function schedule(){
        
        //Your schedule logic.
        $this->schedule->call(function () {
        
        })->daily();
    }
} 

```

#### register

Add follow line to you ServiceProvider register method.

```php
 $this->app->make(iBrand\Scheduling\ScheduleList::class)->add(YourSchedule::class);
```
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

## 果酱云社区

<p align="center">
  <a href="https://guojiang.club/" target="_blank">
    <img src="https://cdn.guojiang.club/image/2022/02/16/wu_1fs0jbco2182g280l1vagm7be6.png" alt="点击跳转"/>
  </a>
</p>



- 全网真正免费的IT课程平台

- 专注于综合IT技术的在线课程，致力于打造优质、高效的IT在线教育平台

- 课程方向包含Python、Java、前端、大数据、数据分析、人工智能等热门IT课程

- 300+免费课程任你选择



<p align="center">
  <a href="https://guojiang.club/" target="_blank">
    <img src="https://cdn.guojiang.club/image/2022/02/16/wu_1fs0l82ae1pq11e431j6n17js1vq76.png" alt="点击跳转"/>
  </a>
</p>
<?php

namespace App\Helpers;

use Carbon\Carbon;

class DateHelper{

    public static function daysAgo($date){
        $diff = Carbon::parse($date)->diffInDays(now());
        dd($diff);
    }

}
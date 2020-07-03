<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class covid_count extends Model
{
    protected $table = 'covid_count';
    

    public static function covid_count()
    {
        $covid_count = covid_count::get();

        return $covid_count;


    }
}

<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class covid_main extends Model
{
    protected $table = 'covid_main';
    

    public static function covid_main()
    {
        $covid_main = covid_main::get();

        return $covid_main;


    }
}

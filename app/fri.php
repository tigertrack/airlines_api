<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class fri extends Model
{
    protected $table = "fri";

    protected $primaryKey = "UniqueID";

    protected $guarded = [];

    public $timestamps = false;

    protected $visible = ['UniqueID', 'TERMINAL', 'UPLINE_CITY1', 'DNLINE_CITY1', 'STD_TIME_STAMP', 'DGATE', 'STA_TIME_STAMP', 'AGATE', 'INT_OR_DOM', 'AIRLINE_CODE', 'FLIGHT_NUM', 'airline', 'depature', 'arrival', 'maskapai', 'keberangkatan', 'kedatangan'];
    
    public function airline(){
        return $this->hasOne('App\airlines', 'CODE', 'AIRLINE_CODE');
    }

    public function arrival(){
        return $this->hasOne('App\station', 'CODE', 'DNLINE_CITY1');
    }

    public function depature(){
        return $this->hasOne('App\station', 'CODE', 'UPLINE_CITY1');
    }
}

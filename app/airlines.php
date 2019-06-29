<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class airlines extends Model
{
    protected $table = "airline_table";

    protected $primaryKey = "CODE";

    protected $casts = [
        'CODE' => 'string'
      ];

    protected $visible = ['CODE', 'SHORT_NAME', 'LONG_NAME'];

    public function fri(){
        return $this->belongsTo('App\fri', 'AIRLINE_CODE', "CODE");
    }
}

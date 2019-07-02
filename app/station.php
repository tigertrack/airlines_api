<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class station extends Model
{
    protected $table = 'station_table';

    protected $primaryKey = 'CODE';

    protected $visible = ['SHORT_NAME', 'LONG_NAME'];

    protected $casts = [
        'CODE' => 'string'
      ];
}

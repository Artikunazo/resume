<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class Experiences extends Model{
    protected $table ='experiences';
    use SoftDeletes;
    protected $fillable = [
        'company',
        'position',
        'activities',
        'date_start',
        'date_exit',
    ];
}
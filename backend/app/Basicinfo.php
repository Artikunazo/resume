<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Basicinfo extends Model{
    protected $table = 'basicinfo';
    protected $fillable = [
        'name',
        'content'
    ];
}
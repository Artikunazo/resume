<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class ContactMe extends Model
{
    protected $table = "contactme";
    protected $fillable = [
        'name',
        'email',
        'subject',
        'comment',
    ];
}

<?php 

namespace App;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class Languages extends Model{
    protected $table = 'languages';
    use SoftDeletes;
    protected $fillable = [
        'name',
        'level'
    ];
}
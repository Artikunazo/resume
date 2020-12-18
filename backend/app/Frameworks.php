<?php 

namespace App;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class Frameworks extends Model{
    protected $table = 'frameworks';
    use SoftDeletes;
    protected $fillable = [
        'language',
        'name',
        'porcent'
    ];
}
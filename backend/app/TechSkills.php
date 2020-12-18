<?php 

namespace App;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class TechSkills extends Model{
    protected $table = 'techskills';
    use SoftDeletes;
    protected $fillable = [
        'name',
        'porcent'
    ];
}
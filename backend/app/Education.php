<?php 

namespace App;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class Education extends Model{
    protected $table = 'education';
    protected $fillable = [
        'career',
        'unversity',
        'professional_license'
    ];
}
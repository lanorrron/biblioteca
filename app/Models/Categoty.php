<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class categoty extends Model
{
    protected $table = ('category');
    protected $primaryKey = ('id');

    protected $fillable = [
        'name'
    ];
    public $timestamps = false;
    use HasFactory;
}

<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use mysql_xdevapi\Table;

class author extends Model
{
    protected $table = ('author');
    protected $primaryKey = ('id');

    protected $fillable = [
        'name',
        'last_name',
        'date_of_birth',
        'nationality',
        'death'

    ];
    public $timestamps = false;
    use HasFactory;
}

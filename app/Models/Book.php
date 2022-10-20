<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class book extends Model
{
    protected $table=('book');
    protected $primaryKey=('id');

    protected $fillable = [
        'name',
        'nro_pages',
        'description',
        'URL_image',
        'user_id'
    ];
    public $timestamps=false;
    use HasFactory;
}

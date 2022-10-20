<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class book_category extends Model
{
    protected $table=('book_category');
    protected $primaryKey=('id');

    protected $fillable=[
        'book_id',
        'category_id'
    ];
    public $timestamps=false;
    use HasFactory;
}

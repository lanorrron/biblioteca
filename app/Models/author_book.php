<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Author_book extends Model
{
    protected $table=('author_id');
    protected $primaryKey=('id');

    protected $fillable=[
        'author_id',
        'book_id'
    ];
    public $timestamps=false;
    use HasFactory;
}

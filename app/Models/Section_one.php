<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Section_one extends Model
{
    use HasFactory;

    protected $table = "section_one";

    protected $fillable = [
        'title',
        'description',
        'img'
    ];
}
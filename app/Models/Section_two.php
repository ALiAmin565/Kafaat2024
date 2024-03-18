<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Section_two extends Model
{
    use HasFactory;

    protected $table = "section_two";

    protected $fillable = [
        'title',
        'description',
        'img'
    ];
}
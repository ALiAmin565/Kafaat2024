<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Section_three extends Model
{
    use HasFactory;

    protected $table = "section_three";

    protected $fillable = [
        'title',
        'description',
        'img'
    ];
}
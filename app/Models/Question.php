<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Question extends Model
{
    use HasFactory;

    protected $table = "setting";

    protected $fillable = [
        'artical',
        'logo_img',
        'title_company',
    ];
}
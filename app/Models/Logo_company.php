<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Logo_company extends Model
{
    use HasFactory;


    protected $table = "logo_company";

    protected $fillable = [
        'alt',
        'image'
    ];
}

<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class email extends Model
{
    use HasFactory;
    protected $table = "email";

    protected $fillable = [
        'email',
        
    ];
    
    public $timestamps = false;

}
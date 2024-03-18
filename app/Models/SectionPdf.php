<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class SectionPdf extends Model
{
    use HasFactory;
    protected $table = "pdf_section";

    protected $fillable = [
        'title',
        'description',
        'file'
    ];
}
<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class SpecialistRole extends Model
{
    use HasFactory;
    protected $fillable = ['role', 'available_places', 'qualifications', 'job_conditions', 'company_id'];

    // Relationship to Company
    public function company()
    {
        return $this->belongsTo(User::class);
    }
}

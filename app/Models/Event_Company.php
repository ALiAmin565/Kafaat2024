<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Event_Company extends Model
{
    use HasFactory;

    protected $fillable=['event_id','company_id','data'];

    public function Company_subscrip()
{
    return $this->belongsTo(Company::class,'company_id');
}

public function event()
{
    return $this->belongsTo(Event::class,'event_id');
}

}
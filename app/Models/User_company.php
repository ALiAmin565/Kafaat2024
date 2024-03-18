<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class User_company extends Model
{
    use HasFactory;
    protected $fillable=['user_id','event_id','company_id','jopSearch_id'];

    public function jop()
    {  
        return $this->hasOne(JopSearch::class,'user_id','user_id');
       
    }

 
}

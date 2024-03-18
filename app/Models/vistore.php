<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class vistore extends Model
{
    use HasFactory;
    protected $fillable=['phone','education','educational_specialization','user_id','name'];

    protected $table = 'Vistore';



    public function User()
    {
        return $this->hasOne(User::class,);
    }

}
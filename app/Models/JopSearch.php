<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class JopSearch extends Model
{
    use HasFactory;
    protected $fillable=['phone','education','educational_specialization','CV','user_id','name'];

    protected $table = 'jop_searches';



    public function User()
    {
        return $this->hasOne(User::class,);
    }

}
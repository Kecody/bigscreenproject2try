<?php

namespace App\Models;

use App\Models\Answer;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class Answerer extends Model
{
    use HasFactory;
    
    protected $fillable = [
        'user_token',
        'user_email',
        'status',
    ];
    
    public function answers(){
        return $this->hasMany(Answer::class);
    }
}

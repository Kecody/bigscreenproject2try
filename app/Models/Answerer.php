<?php

namespace App\Models;

use App\Models\Answer;
use App\Models\Answerer;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class Answerer extends Model
{
    use HasFactory;
    
    protected $guarded = ['id'];
    protected $fillable = [
        'user_email',
        'user_token',
        'status'
    ];
    
    public function answers(){
        return $this->hasMany(Answer::class);
    }
}

<?php

namespace App\Models;

use App\Models\Form;
use App\Models\Question;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class Form extends Model
{
    use HasFactory;
    
    protected $fillable = [
        'title',
        'description',
        'formtoken',
        'status'
    ];

    public function questions(){
         return $this->hasMany(Question::class);
    }
}

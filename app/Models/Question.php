<?php

namespace App\Models;

use App\Models\Form;
use App\Models\Answer;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class Question extends Model
{
    use HasFactory;
    protected $guarded = ['id']; 
    protected $casts = [
        'choices' => 'array'
    ];
    // protected $fillable = [
    //     'title',
    //     'description',
    //     'type',
    //     'choices'
    // ];
    public function answer(){

        return $this->hasOne(Answer::class);
    }
    public function form(){

        return $this->belongsTo(Form::class);    
    }  
}

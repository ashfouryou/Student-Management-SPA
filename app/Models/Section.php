<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use App\Models\Classes;
use App\Models\Student;

class Section extends Model
{
    use HasFactory;

    protected $fillable = ['name','class_id'];


    public function student(){
        return $this->hasMany(Student::class);
    }

    public function classes(){
        return $this->belongsTo(Classes::class,'class_id');
    }
}

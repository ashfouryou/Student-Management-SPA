<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use App\Models\Classes;
use App\Models\Section;

class Student extends Model
{
    use HasFactory;

    protected $fillable = ['name','class_id','section_id','email'];

    protected $with = ['classes','section'];

    public function classes(){
        return $this->belongsTo(Classes::class,'class_id');
    }

    public function section(){
        return $this->belongsTo(Section::class,'section_id');
    }

}

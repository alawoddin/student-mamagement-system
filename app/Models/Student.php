<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Student extends Model
{
    /** @use HasFactory<\Database\Factories\StudentFactory> */
    use HasFactory;

    protected $guarded = [];

     public function class() {
        return $this->hasMany(Classes::class , 'class_id');
    }


     public function section() {
        return $this->hasMany(Section::class , 'section_id');
    }


}

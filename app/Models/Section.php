<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Section extends Model
{
    /** @use HasFactory<\Database\Factories\SectionFactory> */
    use HasFactory;

    protected $guarded = [];

    public function class() {
        return $this->hasMany(Classes::class , 'class_id');
    }

     public function students() {
        return $this->hasMany(Student::class , 'section_id');
    }

   

}

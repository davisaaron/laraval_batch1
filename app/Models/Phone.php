<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Phone extends Model
{
    use HasFactory;
    public function Student(){
        return $this->hasOne(Student::class);
    }
    public function studentPhone()
    {
        return $this->hasOneThrough(Student::class,Phone::class);
    }
}

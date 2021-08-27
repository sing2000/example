<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use App\Models\Student;

class Profile extends Model
{
    use HasFactory;
    protected $fillable = [
        
        'username',
        'address',
        'phone',
        'gender',
        'age',
        'student_id',
    ];

public function students(){
    return $this->belongsTo(Student::class);
}

}

